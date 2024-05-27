<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\mulaiSesi;
use App\Http\Controllers\pageController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\odcController;
use App\Http\Controllers\odpController;
use App\Http\Controllers\sessionController;
use Illuminate\Auth\Middleware\Authenticate;

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

Route::get('/', [pageController::class, 'index'])->middleware('loginpass');//halaman home

Route::get('/dbconn', function(){
    return view('dbconn');
});

Route::get('/login', [sessionController::class, 'index']);//halaman login
Route::get('/logout', [sessionController::class, 'logout']);//logout
Route::post('/login/auth', [sessionController::class, 'login']);//login

Route::get('/odc/search', [odcController::class, 'CARI']);//search odc
Route::get('/odp/search', [odpController::class, 'CARI']);//search odp

Route::resource('/odc', odcController::class)->middleware('loginpass');//halaman odc
Route::resource('/odp', odpController::class)->middleware('loginpass');//halaman odp

Route::get('/profil/{User}', [profilController::class, 'index']);
Route::get('/profil/{User}/edit', [profilController::class, 'edit']);
Route::put('/profil/{User}', [profilController::class, 'update']);

Route::post('/presensi', [presensiController::class, 'attendance']);