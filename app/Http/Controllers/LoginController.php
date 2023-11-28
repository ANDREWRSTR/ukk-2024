<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\models\User;

class LoginController extends Controller
{
    
    function login (){
        return view ('login');
    }
    function proses_login(Request $request){
        $data_login = $request->only("Username","Password");
        if(auth::attempt($data_login)){
            return redirect("table");
        }else{
            // return redirect("login")->with("error","username atau password salah");
            return $data_login;
        }
    }
}
