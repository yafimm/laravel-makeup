<?php

namespace App\Http\Controllers;

use App\Admin;
use Session;
use Hash;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        //
    }

    public function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        $exist = Admin::find($username);
        if($exist){
            if(Hash::check($exist->password, $password)){

            }
        }

    }

    //
}
