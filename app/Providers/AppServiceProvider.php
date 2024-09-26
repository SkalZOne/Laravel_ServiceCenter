<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('no_special_symbols', function ($attribute, $value, $parameters, $validator) {

            $patternArray = ['/^[А-Яа-яЁё ]+$/u', '/^[A-Za-z]+$/u'];

            foreach ($patternArray as $pattern) {
                if (preg_match($pattern, $value)) {
                    return true;
                }
            }
        });
    }
}
