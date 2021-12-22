<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;


class Auth extends Controller
{
    private $userLogin;
    private function checkExisted($login, $password){
        $user=DB::table('users')->where('login', $login)->where('password', $password)->first();
        if($user!=null){
            return $user;
        }
    }
    public function getIn(Request  $request){
        $login=$request['inpLog'];
        $password=md5($request['inpPass']);
        if($this->checkExisted($login, $password)!=null){
            $this->setUserLogin($login);
            return view('main');
        }
        else{
            return view('login')->with('message','login or password is incorrect!');
        }
    }
    private function  setUserLogin($value){
        $this->userLogin=$value;
    }
    public function  getUserLogin():string{
        return $this->userLogin;
    }
}
