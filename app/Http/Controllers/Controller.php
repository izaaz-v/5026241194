<?php

namespace App\Http\Controllers;

abstract class Controller
{
public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);

    }
}
