<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\mulaiSesi;
use App\Http\Controllers\pageController;
use App\Http\Controllers\odcController;
use App\Http\Controllers\odpController;

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

Route::get('/', [pageController::class, 'index']);//halaman home

Route::get('/dbconn', function(){
    return view('dbconn');
});

Route::get('/login', [pageController::class, 'login']);//halaman login
Route::get('/odc/search', [odcController::class, 'CARI']);//search odc
Route::get('/odp/search', [odpController::class, 'CARI']);//search odp

Route::resource('/odc', odcController::class);//halaman odc
Route::resource('/odp', odpController::class);//halaman odp
