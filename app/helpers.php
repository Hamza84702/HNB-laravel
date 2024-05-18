<?php
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

if (!function_exists('calculatediscount')) {
    function calculatediscount($price=0,$discount=0){
        $discounted_price = $discount > 0 ? $price - ($price * ($discount / 100)) : 0;
        return floor($discounted_price);
    }

}
//helper
if (!function_exists('cartdata')) {
    function cartdata(){
        $userId=auth::id();
        if($userId){
            $cartProducts=Cart::where('user_id',$userId)->with('product')->get();
            return $cartProducts;
        }
    }
}