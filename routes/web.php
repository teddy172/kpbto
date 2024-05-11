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

Route::get('/', [pageController::class, 'index']);//halaman home

Route::get('/dbconn', function(){
    return view('dbconn');
});

Route::get('/login', [pageController::class, 'login']);//halaman login
Route::get('/search', [pageController::class, 'cari']);//search

Route::get('/odp', [pageController::class, 'odp']);//halaman odp

Route::resource('/odc', odcController::class);



//halaman odc
// Route::get('/odc', [pageController::class, 'odc']);
//memanggil fungsi index di odccontroller dan tampilkan semua data odc di table
// route::get('odc', [odcController::class, 'index']);
//menampilkan data odc berdasarkan id
// route::get('odc/{odc_id}', [odcController::class, 'show'])->where('odc_id', '[0-9]');
//route all in one dimana akan menerjemahkan tiap class berdasarkan method