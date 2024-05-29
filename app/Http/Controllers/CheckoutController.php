<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class CheckoutController extends Controller
{
    // public function checkoutpage(){
    //     return view('frontend.checkout');
    // }

    public function stripe()
    {
        return view('frontend.checkout');
    }
    

    public function stripePost(Request $request)
    {
        $fullName = $request->input('fullName');
        $email = $request->useremail;
        $phoneNumber = $request->input('tel');
        $billingAddress = $request->input('billingAddress');
        $billingCountry = $request->input('billingCountry');
        $billingCity = $request->input('billingCity');
        $shippingAddress = $request->input('shippingAddress');
        $shippingCountry = $request->input('shippingCountry');
        $shippingCity = $request->input('shippingCity');
        $stripeToken = $request->input('stripeToken');
       $chargedamount=subtotal(cartdata());
    //    dd($chargedamount);

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
       $striperesponse = Stripe\Charge::create ([
                "amount" => $chargedamount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Payment from HnB.com." 
        ]);
      
        Session::flash('success', 'Payment successful!');
              return $striperesponse;
        // return view('frontend.thanku');
       
    }
}
