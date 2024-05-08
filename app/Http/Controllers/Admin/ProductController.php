<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{
    public function addform()
    {
        $categories=Category::all();
    return view('backend.product.add',compact('categories'));
    }

    public function store(request $request)
    {
        $request->validate([
            'pname'=>'required',
            'title'=>'required',
            'pdescription'=>'required',
            'price'=>'required',
            'status'=>'required|in:0,1',
            'qty'=>'required',
            'image1'=>'required|image|mimes:jpeg,png,jpg,gif,webp',
            'image2'=>'required|image|mimes:jpeg,png,jpg,gif,webp',
            'image3'=>'required|image|mimes:jpeg,png,jpg,gif,webp',

        ]);

        $data=array(
        
        'name'=>$request->pname,
        'title'=>$request->title,
        'status'=>$request->status,
        'description'=>$request->pdescription,
        'price'=>$request->price,
        'qty'=>$request->qty,
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

$create=Product::create($data);
Alert::success('Product Created','Your Product Is Added Successfully');
return redirect()->back();
}

    public function index(){
        $products=Product::with('category')->get();
        return view('backend.product.index',compact('products'));
    }

    public function delete(request $request){
        $id=$request->id;
        $data=Product::destroy($id);
        Alert::error('Product Deleted','Your Product is deleted and not be revert');
        return redirect()->back();

    }

    public function details(request $request){
        $id=$request->id;
        $pdetails=Product::where('id',$id)->with(['category.parentcat'])->first();
        return view('backend.product.details',compact('pdetails'));
    }

    public function edit(request $request){
        $id=$request->id;
        $product=Product::where('id',$id)->with(['category.parentcat'])->first();
        $categories=Category::whereNotNull('category_id')->get();
        return view('backend.product.edit',compact('product','categories'));
    }

    public function update(request $request)
    {
         $id=$request->id;
        // $price = $request->input('price');
        // $discount = $request->input('discount');
        // $discountedPrice = $discount > 0 ? $price - ($price * ($discount / 100)) : 0;
        $request->validate([
            'pname'=>'required',
            'title'=>'required',
            'pdescription'=>'required',
            'price'=>'required',
            'status'=>'required|in:0,1',
            'qty'=>'required',

        ]);

        $data=array(
        
        'name'=>$request->pname,
        'title'=>$request->title,
        'status'=>$request->status,
        'description'=>$request->pdescription,
        'price'=>$request->price,
        'qty'=>$request->qty,
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

    $product = Product::findOrFail($id);
    $product->update($data);
    Alert::success('Product Updated','Your Product Is updated Successfully');
    return redirect()->route('product.list');
    }
}
