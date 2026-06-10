<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topi;

class TopiController extends Controller
{
    public function index()
    {
        $topi = Topi::all();
        return view('topi.index', compact('topi'));
    }

    public function create()
    {
        return view('topi.create');
    }

    public function store(Request $request)
    {
        Topi::create([
            'merktopi'  => $request->merktopi,
            'stocktopi' => $request->stocktopi,
            'tersedia'  => $request->tersedia
        ]);

        return redirect()->route('topi.index');
    }

    public function destroy($kodetopi)
    {
        Topi::where('kodetopi', $kodetopi)->delete();
        return redirect()->route('topi.index');
    }
}
