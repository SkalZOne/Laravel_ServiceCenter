<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Validator;

class RegisterController extends AuthController
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
            $this->service->createUser($validator);  
        }
    }
}
