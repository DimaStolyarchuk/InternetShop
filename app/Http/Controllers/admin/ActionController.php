<?php

namespace App\Http\Controllers\admin;

use App\Action;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionController extends Controller
{
    public function action(){
        $dataActions = Action::get();
        return view('admin.action', compact('dataActions'));
    }

    public function action_form(){
        $dataActions = [];
        return view('admin.action_form', compact('dataActions'));
    }

    public function saveaction(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataActions = $request->all();
        Action::updateOrCreate([
            'id' => $dataActions['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'title' => $dataActions['title'],
            'description' => $dataActions['description'],
            'action' => $dataActions['action'],
            'priority' => $dataActions['priority'],

        ]);
        return back();
    }
    public function edit_action($id)
    {
        $dataActions = Action::where('id', $id)->first();
        return view('admin.edit_action', compact('dataActions'));
    }

    public function delete_action($id)
    {
        Action::where('id', $id)->delete();
        return back();
    }
}
