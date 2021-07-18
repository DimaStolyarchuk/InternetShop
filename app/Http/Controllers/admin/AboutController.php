<?php

namespace App\Http\Controllers\admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $dataAbouts = About::get();
        return view('admin.about', compact('dataAbouts'));
    }

    public function about_form(){
        $dataAbouts = [];
        return view('admin.about_form', compact('dataAbouts'));
    }

    public function saveAbout(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataAbouts = $request->all();
        About::updateOrCreate([
            'id' => $dataAbouts['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'title' => $dataAbouts['title'],
            'description' => $dataAbouts['description'],
            'action' => $dataAbouts['action'],
            'priority' => $dataAbouts['priority'],

        ]);
        return back();
    }
    public function edit_about($id)
    {
        $dataAbouts = About::where('id', $id)->first();
        return view('admin.edit_home', compact('dataAbouts'));
    }

    public function delete_about($id)
    {
        About::where('id', $id)->delete();
        return back();
    }
}
