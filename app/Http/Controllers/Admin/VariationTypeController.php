<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\variation_type;

use Illuminate\Http\Request;

class VariationTypeController extends Controller
{
    public function add(){
        $vtypes=variation_type::all();
        return view('backend.variation.type',compact('vtypes'));
    }

    public function store(request $request){
        $data=array(
        'name'=>$request->name
        );

        $create=variation_type::create($data);
        return redirect()->route('type.add');
    }

    public function update(request $request){
        
        $id=$request->update_id;
        $data=array(
            'name'=>$request->name,
        );
        $update=variation_type::find($id);
        $update->update($data);
        return redirect()->route('type.add');

    }
}
