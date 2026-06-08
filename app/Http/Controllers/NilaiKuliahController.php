<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiKuliah;

class NilaiKuliahController extends Controller
{
   public function index()
{
    $nilaikuliah = NilaiKuliah::all();
    return view('indexe5', compact('nilaikuliah'));
}

    public function create()
    {
        return view('createe5');
    }

    public function store(Request $request)
    {
        NilaiKuliah::create([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS
        ]);

        return redirect()->route('nilai.index');
    }
}
