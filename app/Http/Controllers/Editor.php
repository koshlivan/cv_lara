<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Storage;

class Editor extends Controller
{

    public function edition(Request $req){
        $login=session('userLogin');
        //$path = '../storage/app/'.$this->photoPath($req);
        $path = $this->photoPath($req);
        //dd($path);
        $cv=User::where('login', 'ivan')->first();
        if($req['inpPhoto']!=''){
            $cv->photo=$path;
        }
        else{
            $cv->photo=$cv->photo;
        }

        $cv->phone=$req['inpPhone'];
        $cv->email=$req['inpMail'];
        $cv->address=$req['inpAddr'];
        $cv->linked=$req['inpLd'];
        $cv->degree=$req['inpDegree'];
        $cv->university=$req['inpUniversity'];
        $cv->period=$req['inpPeriod'];
        $cv->skill=$req['inpSkill'];
        $cv->name=$req['inpName'];
        $cv->profile=$req['inpProfile'];
        $cv->experience=$req['inpExper'];

        if($login=='ivan'){
            if($req['inpPhoto']!='') {
            $file = $req->file('inpPhoto');
            $file->move('Photo/', 'avatar.png');
            }
            $cv->save();
        }
//        else{
//            return view('main')->with('message','You are not allowed to change data');
//        }
        Route::view('/, main');
        //return view('main');
    }
    public function photoPath(Request $request)
    {
        if($request['inpPhoto']!='') {
            //return $request->file('inpPhoto')->store('photo');


            return 'Photo/avatar.png';
        }
        else{
            return '';
        }
    }
}
