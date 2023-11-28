<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get ('/login',[LoginController::class, 'login']);
Route::post('/login', [LoginController:: class, 'proses_login']);

Route::get ('/registrasi',[PegawaiController::class, 'registrasi']);
Route::post ('/registrasi',[PegawaiController::class, 'proses_registrasi']);

Route::get ('/home',[PegawaiController::class, 'home']);

Route::get ('/admin',[PegawaiController::class, 'admin']);


