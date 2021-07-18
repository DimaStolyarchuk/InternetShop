<?php

namespace App\Http\Controllers\admin;

use App\SecondAction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SecondActionController extends Controller
{
    public function secondaction(){
        $dataSecondActions = SecondAction::get();
        return view('admin.second_action', compact('dataSecondActions'));
    }

    public function secondaction_form(){
        $dataSecondActions = [];
        return view('admin.second_action_form', compact('dataSecondActions'));
    }

    public function saveSecondAction(Request $request)
    {
        $request->file('image', 'secondimage')->store('unloads', 'public');

        $dataSecondActions = $request->all();
        SecondAction::updateOrCreate([
            'id' => $dataSecondActions['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'secondimage' => $request->file('secondimage')->getClientOriginalName(),
            'name' => $dataSecondActions['name'],
            'secondname' => $dataSecondActions['secondname'],
            'description' => $dataSecondActions['description'],
            'price' => $dataSecondActions['price'],
            'action' => $dataSecondActions['action'],
            'priority' => $dataSecondActions['priority'],

        ]);
        return back();
    }
    public function edit_secondaction($id)
    {
        $dataSecondActions = SecondAction::where('id', $id)->first();
        return view('admin.edit_secondaction', compact('dataSecondActions'));
    }

    public function delete_secondaction($id)
    {
        SecondAction::where('id', $id)->delete();
        return back();
    }
}
