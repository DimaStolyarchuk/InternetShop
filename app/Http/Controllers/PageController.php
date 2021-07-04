<?php

namespace App\Http\Controllers;

use App\About;
use App\Action;
use App\Brand;
use App\Category;
use App\Contact;
use App\Home;
use App\Product;
use App\SecondAction;
use App\Specials;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $dataCategorys = Category::get();
        $dataHomes = Home::get();
        return view('home',compact('dataHomes', 'dataCategorys'));
    }

    public function about()
    {
        $dataAbouts = About::get();
        return view('about',compact('dataAbouts'));
    }

    public function brand()
    {
        $dataBrands = Brand::get();
        return view('brand',compact('dataBrands'));
    }

    public function specials()
    {
        $dataSpecials = Specials::get();
        return view('specials',compact('dataSpecials'));
    }
    public function contact()
    {
        $dataContacts = Contact::get();
        return view('contact',compact('dataContacts'));
    }
    public function action()
    {
        $dataActions = Action::get();
        return view('action',compact('dataActions'));
    }
    public function second_action()
    {
        $dataSecondActions = SecondAction::get();
        return view('second_action',compact('dataSecondActions'));
    }
    public function category($id)
    {
        $dataProducts = Product::where('category', $id)->get();
        return view('category',compact('dataProducts'));
    }

}
