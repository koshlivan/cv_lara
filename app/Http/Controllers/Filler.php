<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Filler extends Controller
{
    public function getValues(Request $request)
    {
        $user = User::where('login', 'ivan')->first();
        if(session('userLogin')==''){
            return view('main', compact('user'));
        }
        if ($request->getPathInfo() == "/") {
//            if(session('error')!=""){
//                return view('main', compact('user'))->with('message', session('error'));
//            }
            return view('main', compact('user'));
        }
        if ($request->getPathInfo() == "/edit") {
            return view('edit', compact('user'));
        }
    }
}
