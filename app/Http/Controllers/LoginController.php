<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request) {
        $credentionals = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('login', $credentionals['login'])->first();

        if(!$user || !Hash::check($credentionals['password'], $user->password)) {
            $errors = [
                'login' => 'Логин или пароль не верный'
            ];

            return redirect()->route('login')->withErrors($errors);
        }

        Auth::login($user, $request->filled('remember'));
    }
}
