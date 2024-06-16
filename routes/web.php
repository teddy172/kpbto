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
    tindakanController
};
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

//Testing
// Route::get('/ODCedit', function () {
//     return view('../admin/odcEdit');
// });

// Route::get('/ODPedit', function () {
//     return view('../admin/odpEdit');
// });

// Route::get('/tambahodc', function () {
//     return view('tambahodc');
// });

// Route::get('/admac', function () {
//     return view('adminAccount');
// });

// Route::get('/admass2', function () {
//     return view('adminAssurance2');
// });
// Route::get('/admass3', function () {
//     return view('adminAssurance3');
// });

// Route::get('/index', function () {
//     return view('index');
// });

//admin route
Route::get('/admin', [pageController::class, 'adminIndex']);
Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/admin/login', [adminSessionController::class, 'index']); //halaman login

Route::get('/odc/search', [odcController::class, 'CARI']); //search odc
Route::get('/odp/search', [odpController::class, 'CARI']); //search odp

Route::resource('/odc', odcController::class); //halaman odc admin
Route::resource('/odp', odpController::class); //halaman odp admin

Route::get('/profil/{User}', [profilController::class, 'index']); //tidak terpakai


//user route
Route::get('/', [pageController::class, 'index'])->middleware('loginpass'); //halaman home
Route::get('/login', [sessionController::class, 'index']); //halaman login
Route::get('/logout', [sessionController::class, 'logout']); //logout
Route::post('/login/auth', [sessionController::class, 'login']); //login

Route::get('/ODC/cari', [cariOdcController::class, 'search']); //search odc
Route::resource('/ODC', cariOdcController::class)->middleware('loginpass');

Route::get('/ODP/cari', [cariOdpController::class, 'search']); //search odp
Route::resource('/ODP', cariOdpController::class)->middleware('loginpass');

Route::get('/absen', [presensiController::class, 'index']); //halaman presensi
Route::post('/presensi', [presensiController::class, 'kehadiran']); // input presensi

Route::get('/profil/{User}/edit', [profilController::class, 'edit']); //halaman profil
Route::put('/profil/{User}', [profilController::class, 'update']); //merubah data diri
Route::put('/keamanan/{User}', [profilController::class, 'update']); //merubah password user

Route::get('/assurance/{assurance}', [assuranceController::class, 'index']); //halaman assurance
Route::get('/keberangkatan/{assurance}', [assuranceController::class, 'edit']); //halaman keberangkatan
Route::put('/assurance/update/{assurance}', [assuranceController::class, 'update']); //update waktu

Route::get('/tindakan/{tindakan}', [tindakanController::class, 'index']);//halaman tindakan assurance