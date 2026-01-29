<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('admin.aduan.index');
        }else{
            return view('admin.login');
        }
    }
}
