<?php

namespace App\Http\Controllers\admin;

use App\Customs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function saveCustom(Request $request)
    {
        $dataCustoms = $request->all();
        Customs::updateOrCreate([
            'name' => $dataCustoms['name'],
            'tel' => $dataCustoms['tel'],
            'email' => $dataCustoms['email'],
        ]);
        return view('thanks');
    }


}
