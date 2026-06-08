<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeranjangBelanja;

class KeranjangBelanjaController extends Controller
{
public function index()
{
    $keranjang = KeranjangBelanja::all();
    return view('indexd4', compact('keranjang')); // Change this line
}

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        KeranjangBelanja::create([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga
        ]);

        return redirect()->route('keranjang.index');
    }

    public function destroy($id)
    {
        KeranjangBelanja::findOrFail($id)->delete();
        return redirect()->route('keranjang.index'); // fixed a lil bug
    }
}
