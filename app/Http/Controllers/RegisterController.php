<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\RegisterRequest;
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

        $this->service->createUser($validator);
    }
}
