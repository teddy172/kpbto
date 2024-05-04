<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\mulaiSesi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', function () {
    return view('index');
});

Route::get('/dbconn', function(){
    return view('dbconn');
});

Route::get('/odp', function(){
    return view('odp');
});
