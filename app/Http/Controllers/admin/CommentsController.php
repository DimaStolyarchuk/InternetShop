<?php

namespace App\Http\Controllers\admin;

use App\Comments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function comment(){
        $dataComments = Comments::get();
        return view('admin.comment', compact('dataComments'));
    }

    public function comment_form(){
        $dataComments = [];
        return view('admin.comment_form', compact('dataComments'));
    }

    public function saveСomment(Request $request)
    {
//        $request->file('image')->store('unloads', 'public');

        $dataComments = $request->all();
        Comments::updateOrCreate([
            'id' => $dataComments['id'],
        ],[
            'name' => $dataComments['name'],
            'title' => $dataComments['title'],
            'comment' => $dataComments['comment'],
            'action' => $dataComments['action'],
            'priority' => $dataComments['priority'],

        ]);
        return back();
    }
    public function edit_comment($id)
    {
        $dataComments = Comments::where('id', $id)->first();
        return view('admin.edit_comment', compact('dataComments'));
    }

    public function delete_comment($id)
    {
        Comments::where('id', $id)->delete();
        return back();
    }
}
