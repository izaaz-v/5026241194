<?php

namespace App\Http\Controllers;

use App\Models\tagihan_air;
use Illuminate\Http\Request;

class TagihanAirController extends Controller
{
    public function index()
    {
        $tagihanAir = tagihan_air::all();
        return view('tagihan_air.index', compact('tagihanAir'));
    }

    public function create()
    {
        return view('tagihan_air.create');
    }

    public function store(Request $request)
    {
        tagihan_air::create([
            'NoMeteren' => $request->NoMeteren,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir
        ]);

        return redirect()->route('tagihan_air.index');
    }

    public function destroy($ID)
    {
        tagihan_air::where('ID', $ID)->delete();
        return redirect()->route('tagihan_air.index');
    }
}
