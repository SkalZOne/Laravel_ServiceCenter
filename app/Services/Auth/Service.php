<?php

namespace App\Services\Auth;
use App\Models\User;
use Hash;

class Service
{
    public function createUser($validator)
    {
        $user = User::make($validator->getData());
        $password = $user->password;
        $user->password = Hash::make($password);
        $user->save();
    }
}