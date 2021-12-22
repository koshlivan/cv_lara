<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth;

class Editor extends Controller
{
    public $whatLogin;
    public function __construct()
    {
        $this->whatLogin=new \App\Http\Controllers\Auth();
    }

    public function edition(Request $req){
        dd($this->whatLogin);
    }
}
