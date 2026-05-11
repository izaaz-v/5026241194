<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Don't forget this import!

class PegawaiController extends Controller
{
    public function index()
    {
        // Fetch all data for the initial load
        $pegawai = DB::table('pegawai')->paginate(10);
        return view('index', ['pegawai' => $pegawai]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        // The search logic
        $pegawai = DB::table('pegawai')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();

        return view('index', ['pegawai' => $pegawai]);
    }
}
