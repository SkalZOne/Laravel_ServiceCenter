<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Hash;
use Validator;

class RegisterController extends Controller
{

    public function index()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        $validator = Validator::make(request()->all(), $request->validated());

        if($validator->fails()) {
            $errors = $validator->errors()->messages();
            return redirect()->route('register')->withErrors($errors);
        } else {
            $user = User::make($validator->getData());
            
            $password = $user->password;
            $user->password = Hash::make($password);

            $user->save();
        }
    }
}
