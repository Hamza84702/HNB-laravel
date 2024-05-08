<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $products=Product::where('status','1')->latest()->get();
        $randproducts=Product::where('status','1')->inRandomOrder()->take(5)->get();
        return view('frontend.home',compact('products','randproducts'));
        
    }
}
