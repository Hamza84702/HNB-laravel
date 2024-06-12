<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Session;
use Stripe;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderConfirmation;

class CheckoutController extends Controller
{
    public function stripe()
    {
        return view('frontend.checkout');
    }
    
    public function stripePost(Request $request)
    {
        $this->validate($request, [
            'fullName' => 'required|string|max:255',
            'useremail' => 'required|string|email|max:255',
            'tel' => 'required|string|max:15',
            'billingAddress' => 'required|string',
            'billingCountry' => 'required|string',
            'billingCity' => 'required|string',
            'shippingAddress' => 'required|string',
            'shippingCountry' => 'required|string',
            'shippingCity' => 'required|string',
            'stripeToken' => 'required|string'
        ]);

        $userId = auth::user()->id;
        $fullName = $request->input('fullName');
        $email = $request->input('useremail');
        $phone = $request->input('tel');

        $billingAddress = [
            'billingAddress' => $request->input('billingAddress'),
            'billingCountry' => $request->input('billingCountry'),
            'billingCity' => $request->input('billingCity'),
        ];
        $shippingAddress = [
            'shippingAddress' => $request->input('shippingAddress'),
            'shippingCountry' => $request->input('shippingCountry'),
            'shippingCity' => $request->input('shippingCity')
        ];
    
        $stripeToken = $request->input('stripeToken');
        $chargedAmount = subtotal(cartdata()) * 100; // Convert to cents
    
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        try {
            $stripeResponse = \Stripe\Charge::create([
                "amount" => $chargedAmount,
                "currency" => "usd",
                "source" => $stripeToken,
                "description" => "Payment from HnB.com.",
            ]);

            if ($stripeResponse) {
                Log::info('Stripe charge successful.', ['stripeResponse' => $stripeResponse]);
                $this->createOrder($userId, $fullName, $email, $phone, $billingAddress, $shippingAddress, 'Paid', 'Stripe');
            }

            Session::flash('success', 'Payment successful!');
            return view('frontend.thanku');
        }
         catch (\Stripe\Exception\CardException $e) {
            return redirect()->back()->withErrors(['stripe_error' => $e->getMessage()]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['stripe_error' => 'An error occurred while processing your payment. Please try again later.']);
        }
    }
    
    public function createOrder($userId, $fullName, $email, $phone, $billingAddress, $shippingAddress, $payment_status, $payment_method)
    {
        try {
            $order = [
                'total_amount' => subtotal(cartdata()), // Total amount in dollars
                'user_id' => $userId,
                'full_name' => $fullName,
                'email' => $email,
                'phone' => $phone,
                'billing_address' => json_encode($billingAddress),
                'shipping_address' => json_encode($shippingAddress),
                'order_number' => '#' . mt_rand(),
                'delivery_at' => Carbon::now()->addDays(5)->toDateString(),
                'payment_status' => $payment_status,
                'payment_method' => $payment_method
            ];

            Log::info('Order data', ['order' => $order]);

            $orderSaved = Order::create($order);

            if ($orderSaved) {
                foreach (cartdata() as $cartItem) {
                    $orderItem = new OrderItem();
                    $orderItem->order_id = $orderSaved->id;
                    $orderItem->product_id = $cartItem->product->id;
                    $orderItem->quantity = $cartItem->qty;
                    $orderItem->price = $cartItem->product->price;
                    $orderItem->discount = calculatetotaldiscount($cartItem->product->price, $cartItem->product->discount);
                    $orderItem->save();

                    Log::info('OrderItem created successfully.', ['orderItem' => $orderItem]);

                    if ($orderItem) {
                        Cart::where('id', $cartItem->id)->delete();
                        Log::info('Cart item deleted.', ['cartItem' => $cartItem]);
                    }

                }
                $neworder = Order::where('id',$orderSaved->id)->with('items.product')->first();
                //  dd($neworder);
                Mail::to($orderSaved->email)->send(new OrderConfirmation($neworder));
                Log::info('Order confirmation email sent.', ['order' => $neworder]);
            }
        } catch (\Exception $e) {
            Log::error('Error creating order.', ['error' => $e->getMessage()]);
        }

        return;
    }   
}
