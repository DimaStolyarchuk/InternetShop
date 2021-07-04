<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondActionController extends Controller
{
    public function secondaction(){
        $dataSecondActions = Action::get();
        return view('admin.second_action', compact('dataSecondActions'));
    }

    public function secondaction_form(){
        $dataSecondActions = [];
        return view('admin.secondaction_form', compact('dataSecondActions'));
    }

    public function savesecondaction(Request $request)
    {
        $request->file('image')->store('unloads', 'public');

        $dataSecondActions = $request->all();
        Action::updateOrCreate([
            'id' => $dataSecondActions['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'title' => $dataSecondActions['title'],
            'description' => $dataSecondActions['description'],
            'action' => $dataSecondActions['action'],
            'priority' => $dataSecondActions['priority'],

        ]);
        return back();
    }
    public function edit_secondaction($id)
    {
        $dataSecondActions = Action::where('id', $id)->first();
        return view('admin.edit_secondaction', compact('dataSecondActions'));
    }

    public function delete_secondaction($id)
    {
        Action::where('id', $id)->delete();
        return back();
    }
}
