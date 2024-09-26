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
            'login.unique' => 'Данный логин уже занят',
            'password.upper_lower_case' => 'Обязательное присутствие хотя бы одной буквы в верхнем и нижнем регистре'
        ];
        $validator = Validator::make(request()->all(), $rules, $messages);

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
