<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function addform()
    {
        $parentcats=Category::where('category_id',null)->get();
        return view('backend.category.add',compact('parentcats'));    
    }

    public function store(request $request)
    {
        
        $request->validate([
            'name'=>'required',
        ]);

        $data=array(
         'name'=>$request->name,
        'category_id'=>$request->category_id,
         );
         
        $create=Category::create($data);
        return redirect()->back();

    }

    public function list()
    {
        $categories=Category::with('parentcat')->get();
        return view('backend.category.index',compact('categories'));
    }

    public function edit(request $request)
    {
        $id=$request->id;
        $catdata=Category::find($id);
        $parentcat=Category::where('category_id',null)->get();
        return view('backend.category.edit',compact('catdata','parentcat'));
    }

    public function update(request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);

        $data=array(
         'name'=>$request->name,
        'category_id'=>$request->category_id,
         );
         
        $create=Category::update($data);
        return redirect()->back();
    }

    public function delete(request $request)
    {
        $id=$request->id;
        $del=Category::destroy($id);
        Alert::success('Category Deleted','Your Category Is deleted Successfully');
        return redirect()->back();
    }

}


