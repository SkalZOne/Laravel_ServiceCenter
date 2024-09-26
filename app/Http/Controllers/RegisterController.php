<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    public function __invoke() {
        $rules = [
            'fio' => 'no_special_symbols',
            'login' => 'min:3|unique:users',
            'phone' => 'phone:RU',
            'password' => 'upper_lower_case',
        ];

        $messages = [
            'phone.phone' => 'Требуется правильный формат телефона',
            'fio.no_special_symbols' => 'Нельзя использовать специальные символы',
            'login.min' => 'Логин должен состоять минимум из 3-ех букв',
            'password.upper_lower_case' => 'Обязательное присутствие хотя бы одной буквы в верхнем и нижнем регистре'
        ];
        $validator = Validator::make(request()->all(), $rules, $messages);

        if($validator->fails()) {
            dd($validator->messages());
        } else {
            $user = User::make($validator->getData());

            $user->save();
        }
}
}
