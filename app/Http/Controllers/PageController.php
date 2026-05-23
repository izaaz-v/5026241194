<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // This is the missing method
    public function index()
    {
        return view('blog');
    }
}
