<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi_m;
use App\Models\Kabupaten_m;
use App\Models\Kecamatan_m;
use App\Models\Kelurahan_m;

class WilayahController extends Controller
{
    // ambil data provinsi (INI YANG KAMU BUTUH UNTUK DROPDOWN AWAL)
    public function provinsi()
    {
        $provinsi = Provinsi_m::all();
return view('pendonor_baru', compact('provinsi'));
    }

    // kabupaten berdasarkan provinsi
    public function kabupaten($provinsi_id)
    {
        return response()->json(
            Kabupaten_m::where('provinsi_id', $provinsi_id)->get()
        );
    }

    // kecamatan berdasarkan kabupaten
    public function kecamatan($kabupaten_id)
    {
        return response()->json(
            Kecamatan_m::where('kabupaten_id', $kabupaten_id)->get()
        );
    }

    // kelurahan berdasarkan kecamatan
    public function kelurahan($kecamatan_id)
    {
        return response()->json(
            Kelurahan_m::where('kecamatan_id', $kecamatan_id)->get()
        );
    }
}