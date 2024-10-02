<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('login', $request->validated(['login']))->first();

        if (!$user || !Hash::check($request->validated(['password']), $user->password)) {
            return redirect()->route('login')->withErrors(['login' => 'Логин или пароль не верный']);
        }

        Auth::login($user, $request->filled('remember'));

        return redirect()->route('home');
    }
}
