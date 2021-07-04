<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Info;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $dataProducts = Product::get();
        return view('admin.product', compact('dataProducts'));
    }

    public function product_form(){

        $dataCategorys = Category::get();
        return view('admin.product_form', compact('dataCategorys'));
    }

    public function saveproduct(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataProducts = $request->all();
        Product::updateOrCreate([
            'id' => $dataProducts['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'product' => $dataProducts['product'],
            'price' => $dataProducts['price'],
            'category' => $dataProducts['category'],
            'action' => $dataProducts['action'],
            'priority' => $dataProducts['priority'],

        ]);
        return back();
    }
    public function edit_product($id)
    {
        $dataProducts = Product::where('id', $id)->first();
        return view('admin.edit_home', compact('dataProducts'));
    }

    public function delete_product($id)
    {
        Product::where('id', $id)->delete();
        return back();
    }
}
