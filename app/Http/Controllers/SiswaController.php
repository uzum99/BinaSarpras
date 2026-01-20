<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function home()
    {
        return view('siswa.home');
    }

    public function about()
    {
        return view('siswa.about');
    }

    public function tiket()
    {
        return view('siswa.tiket-aduan');
    }
}
