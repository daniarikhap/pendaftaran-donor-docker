<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WilayahController;
use App\Models\Provinsi_m;

Route::get('/', function () {
    return view('home');
});
Route::get('/pendonor-baru', function () {
    return view('pendonor_baru');
});

Route::get('/pendonor-baru', function () {
    $provinsi = Provinsi_m::all();
    return view('pendonor_baru', compact('provinsi'));
});

Route::get('/kabupaten/{provinsi_id}', [WilayahController::class, 'kabupaten']);
Route::get('/kecamatan/{kabupaten_id}', [WilayahController::class, 'kecamatan']);
Route::get('/kelurahan/{kecamatan_id}', [WilayahController::class, 'kelurahan']);