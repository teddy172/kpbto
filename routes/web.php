<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\mulaiSesi;
use App\Http\Controllers\pageController;
use App\Http\Controllers\odcController;

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

Route::get('/', [pageController::class, 'index']);

Route::get('/dbconn', function(){
    return view('dbconn');
});

Route::get('/odp', [pageController::class, 'odp']);

route::resource('/odc', odcController::class);

Route::get('/login', [pageController::class, 'login']);