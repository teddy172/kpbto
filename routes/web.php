<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\mulaiSesi;
use App\Http\Controllers\pageController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\odcController;
use App\Http\Controllers\odpController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\presensiController;
use App\Http\Controllers\cariOdcController;
use App\Http\Controllers\cariOdpController;
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

Route::get('/odc/search', [odcController::class, 'CARI']);//search odc
Route::get('/odp/search', [odpController::class, 'CARI']);//search odp

Route::resource('/odc', odcController::class)->middleware('loginpass');//halaman odc admin
Route::resource('/odp', odpController::class)->middleware('loginpass');//halaman odp admin

Route::get('/profil/{User}', [profilController::class, 'index']);//tidak terpakai


//user route
Route::get('/login', [sessionController::class, 'index']);//halaman login
Route::get('/logout', [sessionController::class, 'logout']);//logout
Route::post('/login/auth', [sessionController::class, 'login']);//login

Route::get('/ODC/cari', [cariOdcController::class, 'search']);//search odc
Route::resource('/ODC', cariOdcController::class)->middleware('loginpass');

Route::get('/ODP/cari', [cariOdpController::class, 'search']);
Route::resource('/ODP', cariOdpController::class)->middleware('loginpass');

Route::get('/absen', [presensiController::class, 'index']);
Route::post('/presensi', [presensiController::class, 'kehadiran']);

Route::get('/profil/{User}/edit', [profilController::class, 'edit']);
Route::put('/profil/{User}', [profilController::class, 'update']);//merubah data diri
Route::put('/keamanan/{User}', [profilController::class, 'update']);//merubah password user