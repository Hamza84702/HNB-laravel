<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Variation_type;
use App\Models\Product;
use App\Models\Product_Variation;
use RealRashid\SweetAlert\Facades\Alert;




class ProductvariationController extends Controller
{
    public function add(){
        $variationtypes=Variation_type::all();
        $products=Product::all();
        return view('backend.productvariation.add',compact('variationtypes','products'));
    }

    public function addform()
    {
        $categories=Category::all();
    return view('backend.product.add',compact('categories'));
    }

    public function store(request $request)
    {
        $request->validate([
            'product_id'=>'required',
            'type_id'=>'required',
            'title'=>'required|string',
            'pdescription'=>'required',
            'price'=>'required',
            'status'=>'required|in:0,1',
            'qty'=>'required',
            'image1'=>'required|image|mimes:jpeg,png,jpg,gif,webp',
            'image2'=>'required|image|mimes:jpeg,png,jpg,gif,webp',
            'image3'=>'required|image|mimes:jpeg,png,jpg,gif,webp',
        ]);

        $data=array(
        
        'product_id'=>$request->product_id,
        'title'=>$request->title,
        'variation_type_id'=>$request->type_id,
        'status'=>$request->status,
        'description'=>$request->pdescription,
        'price'=>$request->price,
        'qty'=>$request->qty,
        'name'=>$request->name,
        'color_code'=>$request->color_code,
        'discount'=>$request->discount,
        'category_id'=>$request->category_id,
        );

       // Upload and save image1
if ($request->hasFile('image1')) {
    $image1 = $request->file('image1');
    $filename1 = 'image1_' . date('dmyHis') . '.' . $image1->getClientOriginalExtension();
    $image1->move(public_path('/uploads/products'), $filename1);
    $data['image1'] = $filename1;
}

// Upload and save image2
if ($request->hasFile('image2')) {
    $image2 = $request->file('image2');
    $filename2 = 'image2_' . date('dmyHis') . '.' . $image2->getClientOriginalExtension();
    $image2->move(public_path('/uploads/products'), $filename2);
    $data['image2'] = $filename2;
}

// Upload and save image3
if ($request->hasFile('image3')) {
    $image3 = $request->file('image3');
    $filename3 = 'image3_' . date('dmyHis') . '.' . $image3->getClientOriginalExtension();
    $image3->move(public_path('/uploads/products'), $filename3);
    $data['image3'] = $filename3;
}

$create=Product_Variation::create($data);
Alert::success('Product Variation Created','Your Variation Is Added Successfully');
return redirect()->back();
}
}
