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
    return view('landingpage');
});

Route::get('/login', function () {
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

Route::get('/assurance', function () {
    return view('assurance1');
});

Route::get('/assurance2', function () {
    return view('assurance2');
});

Route::get('/assurance3', function () {
    return view('assurance3');
});

Route::get('/tech', function () {
    return view('techclosed');
});
