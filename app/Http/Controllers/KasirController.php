<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    function produk (){
        return view ('produk');
    }
    function tambah_produk (){
        return view ('tambah');
    }
}
