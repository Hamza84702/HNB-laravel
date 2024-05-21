<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Auth;

class CartController extends Controller
{
    public function addtocart(request $request){

        if(auth::user()->id)
        {
            $data=array(
                'user_id'=>auth::user()->id,
                'product_id'=>$request->product_id,
                'qty'=>$request->quantity
            );
    
            Cart::create($data);
            return response()->json(['success' => true, 'message'=>"Product added to cart successfull"]);
        }
    }


    public function destroy(request $request){

        $id=$request->CartId;
        Cart::destroy($id);
        return response()->json(['success'=>true]);

    }


    public function cartdetails(){
        $id=auth::id();
        if($id)
        {
            $catProducts=Cart::where('user_id',$id)->with('product')->get();
           
           return view('frontend.cartdetails',compact('catProducts'));
        }
    }

    public function updatedcartdata(){
        $cartdata = cartdata();
        $subtotal=subtotal($cartdata);
        return response()->json(['cartdata'=>$cartdata,'subtotal'=>$subtotal,'itemCount' => $cartdata->count(), 200]);
    }

    // public function viewcart(){
    //     $userid=auth::id();
    //     $cartProduct=Cart::where('user_id',$userid)->with('product')->get();
    // }
}
