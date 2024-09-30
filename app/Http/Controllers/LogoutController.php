<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function index() {
        return view('logout');
    }

    public function logout(Request $request) {

        Auth::logout();
        
        if (str_contains(url()->previous(), 'logout')) {
            return redirect()->route('login');
        } else {
            return redirect()->route('home');
        }
    }
}
