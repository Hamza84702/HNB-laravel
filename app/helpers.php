<?php
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

if (!function_exists('calculatediscount')) {
    function calculatediscount($price=0,$discount=0){
        $discounted_price = $discount > 0 ? $price - ($price * ($discount / 100)) : 0;
        return floor($discounted_price);
    }

}

if (!function_exists('cartdata')) {
    function cartdata(){
        $userId=auth::id();
        if($userId){
            $cartProducts=Cart::where('user_id',$userId)->with('product')->get();
            return $cartProducts;
        }
    }
}

function subtotal($data){
    $subtotal=0;
    foreach($data as $cartproduct){
        //use helper funcion calculatediscount
        $discountprice = calculatediscount($cartproduct->product->price,$cartproduct->product->discount);
        $subtotal += $discountprice *  $cartproduct->qty;
       
    }
    return $subtotal;

}