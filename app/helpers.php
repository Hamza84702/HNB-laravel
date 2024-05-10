<?php

if (!function_exists('calculatediscount')) {
    function calculatediscount($price,$discount){
        $discounted_price = $discount > 0 ? $price - ($price * ($discount / 100)) : 0;
        return $discounted_price;
    }

}
