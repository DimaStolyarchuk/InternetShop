<?php

namespace App\Http\Controllers\admin;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brand(){
        $dataBrands = Brand::get();
        return view('admin.brand', compact('dataBrands'));
    }

    public function brand_form(){
        $dataBrands = [];
        return view('admin.brand_form', compact('dataBrands'));
    }

    public function saveBrand(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataBrands = $request->all();
        Brand::updateOrCreate([
            'id' => $dataBrands['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'title' => $dataBrands['title'],
            'description' => $dataBrands['description'],
            'action' => $dataBrands['action'],
            'priority' => $dataBrands['priority'],

        ]);
        return back();
    }
    public function edit_brand($id)
    {
        $dataBrands = Brand::where('id', $id)->first();
        return view('admin.edit_brand', compact('dataBrands'));
    }

    public function delete_brand($id)
    {
        Brand::where('id', $id)->delete();
        return back();
    }
}
