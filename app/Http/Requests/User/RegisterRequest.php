<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fio' => 'required|no_special_symbols',
            'login' => 'required|min:3|unique:users',
            'phone' => 'required|phone:RU',
            'password' => 'required|upper_lower_case',
        ];
    }

    public function messages() {
        return [
            'phone.phone' => 'Требуется правильный формат телефона',
            'fio.no_special_symbols' => 'Нельзя использовать специальные символы',
            'login.min' => 'Логин должен состоять минимум из 3-ех букв',
            'login.unique' => 'Данный логин уже занят',
            'password.upper_lower_case' => 'Обязательное присутствие хотя бы одной буквы в верхнем и нижнем регистре',
            'required' => 'Поле должно быть обязательно заполненно'
        ];
    }
}
