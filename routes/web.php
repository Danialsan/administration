<?php

use App\Http\Controllers\Admin\SantriController;
use App\Http\Controllers\Admin\WismaController;
use App\Http\Controllers\Santri\PembayaranController;
use App\Http\Controllers\Santri\PerizinanController;
use App\Models\PerizinanSantri;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('petugas.beranda');
});


// Pelayanan
Route::resource('petugas/pelayanan/perizinan', PerizinanController::class)->only('index', 'store', 'destroy');

Route::resource('/petugas/pelayanan/pembayaran', PembayaranController::class)->only('index', 'update');

Route::get('/petugas/ppsb', function () {
    return view('petugas.ppsb');
});

Route::get('/petugas/print-out', function () {
    return view('petugas.print-out');
});

// Admin

// Route::get('/admin/santri', function () {
//     return view('admin.santri');
// });

Route::resource('/admin/santri', SantriController::class)->only('index', 'store', 'update', 'destroy');

Route::get('/admin/sekolah/umum', function () {
    return view('admin.umum');
});

Route::get('/admin/sekolah/madin', function () {
    return view('admin.madin');
});

Route::get('admin/wisma', function () {
    return view('admin.wisma');
});

// Route::get('/admin/pengaturan/wisma', function () {
//     return view('admin.pengaturan-wisma');
// });
Route::resource('/admin/pengaturan/wisma', WismaController::class)->only('index', 'store', 'update', 'destroy');

Route::get('/admin/pengaturan/keuangan', function () {
    return view('admin.pengaturan-keuangan');
});

Route::get('/admin/pengaturan/upload-user', function () {
    return view('admin.upload-data');
});
