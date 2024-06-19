<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\mulaiSesi;
use App\Http\Controllers\{
    pageController,
    profilController,
    odcController,
    odpController,
    sessionController,
    adminSessionController,
    presensiController,
    cariOdcController,
    cariOdpController,
    assuranceController,
    tindakanController,
    adminProfilController,
    adminAssuranceController
};
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\adminAuth;

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

Route::get('/testt', function () {
    return view('landingpage');
});

Route::get('/loginsss', function () {
    return view('login');
});

//admin route
Route::get('/admin', [pageController::class, 'adminIndex'])->middleware('adminLoginPass');
Route::get('/dbconn', function(){
    return view('dbconn');
});

Route::get('/admin/login', [adminSessionController::class, 'index']);//halaman login
Route::get('/admin/logout', [adminSessionController::class, 'logout']);//logout
Route::post('/admin/login/auth', [adminSessionController::class, 'login']);//login post

Route::get('/odc/search', [odcController::class, 'CARI']); //search admin odc
Route::get('/odp/search', [odpController::class, 'CARI']); //search admin odp

Route::resource('/odc', odcController::class)->middleware('adminLoginPass'); //halaman odc admin
Route::resource('/odp', odpController::class); //halaman odp admin

Route::get('/admin/registration', [adminProfilController::class, 'create']); //halaman regis admin
Route::post('/admin/signed', [adminProfilController::class, 'store']); //input account baru admin
Route::get('/profilAdmin/{admin}/edit', [adminProfilController::class, 'edit']); //halaman profil
Route::put('/profilAdmin/{admin}', [adminProfilController::class, 'update']); //merubah data diri
Route::put('/keamananAdmin/{admin}', [adminProfilController::class, 'update']); //merubah password user

Route::get('/admin/assuranceCari', [adminAssuranceController::class, 'CARI']); //search odc
Route::resource('/adminAssurance', adminAssuranceController::class);//halaman admin assurance


//user route
Route::get('/page', [pageController::class, 'page']);
Route::get('/', [pageController::class, 'index'])->middleware('loginpass'); //halaman home
Route::get('/login', [sessionController::class, 'index']); //halaman login
Route::get('/logout', [sessionController::class, 'logout']); //logout
Route::post('/login/auth', [sessionController::class, 'login']); //login

Route::get('/ODC/cari', [cariOdcController::class, 'search']); //search odc
Route::resource('/ODC', cariOdcController::class)->middleware('loginpass');//halaman odc

Route::get('/ODP/cari', [cariOdpController::class, 'search']); //search odp
Route::resource('/ODP', cariOdpController::class)->middleware('loginpass');//halaman odp

Route::get('/absen', [presensiController::class, 'index']); //halaman presensi
Route::post('/presensi', [presensiController::class, 'kehadiran']); // input presensi

Route::get('/profil/{User}/edit', [profilController::class, 'edit']); //halaman profil
Route::put('/profil/{User}', [profilController::class, 'update']); //merubah data diri
Route::put('/keamanan/{User}', [profilController::class, 'update']); //merubah password user

Route::get('/assurance/{assurance}', [assuranceController::class, 'index']); //halaman assurance
Route::get('/keberangkatan/{assurance}', [assuranceController::class, 'edit']); //halaman keberangkatan
Route::put('/assurance/update/{assurance}', [assuranceController::class, 'update']); //update waktu assurance

Route::get('/tindakan/{tindakan}', [tindakanController::class, 'index']);//halaman tindakan assurance
Route::post('/tindakan/tambah', [tindakanController::class, 'create']);//tambah tindakan
