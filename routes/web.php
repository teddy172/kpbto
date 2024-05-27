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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/presensi', function () {
    return view('presensi');
});

Route::get('/cariodc', function () {
    return view('cariodc');
});

Route::get('/tambahodc', function () {
    return view('tambahodc');
});

Route::get('/cariodp', function () {
    return view('cariodp');
});

Route::get('/tambahodp', function () {
    return view('tambahodp');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/odp', function () {
    return view('odp');
});
