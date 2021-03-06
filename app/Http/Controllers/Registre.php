<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;


class Registre extends Controller
{
    private function checkExisted($login):bool{
        $users=DB::table('users')->where('login', $login)->first();
        return $users!=null;
    }

    public function createUser(Request $request){
        $login=$request['inpLog'];
        $email=$request['inpEmail'];
        $password=$request['inpPass'];
        $repPassword=$request['inpRePass'];
        if(!$this->checkExisted($login)){
            if($password===$repPassword){
                DB::table('users')->insert([
                    'email' => $email,
                    'login' => $login,
                    'password' => md5($password)
                ]);
                return redirect('/login');
                //return view('login')->with('mess_ok', 'You have been registered successfully, please Log In');
            }
            else{
                return view('register')->with('message','passwords doesn\'t match each other');
            }
        }
        else{
            return view('register')->with('message','such login is already exist');
        }
    }


}
