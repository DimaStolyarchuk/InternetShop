<?php

namespace App\Http\Controllers;

use App\About;
use App\Action;
use App\Basket;
use App\Brand;
use App\Category;
use App\Comments;
use App\Contact;
use App\Entry;
use App\Home;
use App\Product;
use App\SecondAction;
use App\Specials;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
    public function home()
    {
        $dataComments = Comments::get();
        $dataCategorys = Category::get();
        $dataHomes = Home::get();
        return view('NewHome',compact('dataHomes', 'dataCategorys', 'dataComments'));
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

    public function contact()
    {
        $dataContacts = Contact::get();
        return view('contact',compact('dataContacts'));
    }

    public function entry()
    {
        $dataEntry = Entry::get();
        return view('entry',compact('dataEntry'));
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

    public function basket(request $request)
    {
        if (Auth::check()) {
            $user = Auth::user();
        }
        if ($request->get('id'))
        {
        }
        $idUsers = \Auth::user()->id;

        $roles = $user->products()->orderBy('id')->get();



        return view('basket',compact(  'idUsers', 'roles'));
    }

    public function saveBasket($id)
    {
        $users = Auth::user();

            $users->products()->attach($id);

        return back();
    }







}
