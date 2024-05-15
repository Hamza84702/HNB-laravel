<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Auth;
class HomeController extends Controller
{
    public function home()
    {
        $products=Product::where('status','1')->latest()->get();
        $randproducts=Product::where('status','1')->inRandomOrder()->take(5)->get();
        $latestproducts=Product::where('status','1')->latest()->take(5)->get();
        $catProducts=$this->cartdata();
        return view('frontend.home',compact('products','randproducts','latestproducts','catProducts'));


        
    }

    public function cartdata(){
        $userId=auth::id();
        if($userId){
            $cartProducts=Cart::where('user_id',$userId)->with('product')->get();
            return $cartProducts;
        }
    }
}
