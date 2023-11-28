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
   
}
