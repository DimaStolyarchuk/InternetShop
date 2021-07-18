<?php

namespace App\Http\Controllers\admin;

use App\Basket;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function basket()
    {
        $dataBaskets = Basket::get();
        $dataProducts = Product::get();
        return view('basket',compact('dataBaskets', 'dataProducts'));
    }
    public function addToBasket(Request $request){

        return response()->json(['id' => $request->id]);
    }



}
