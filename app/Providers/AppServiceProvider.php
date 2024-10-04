<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
        Paginator::defaultView('pagination');

        Gate::policy(User::class, UserPolicy::class);

        Validator::extend('no_special_symbols', function ($attribute, $value, $parameters, $validator) {

            $patternArray = ['/^[А-Яа-яЁё ]+$/u', '/^[A-Za-z]+$/u'];

            foreach ($patternArray as $pattern) {
                if (preg_match($pattern, $value)) {
                    return true;
                }
            }
        });

        Validator::extend('upper_lower_case', function ($attribute, $value, $parameters, $validator) {

            $patternUppercase = ['/[А-ЯЁ]/u', '/[A-Z]/u'];
            $patternLowercase = ['/[а-яё]/u', '/[a-z]/u'];

            foreach ($patternUppercase as $patternUpper) {
                foreach ($patternLowercase as $patternLower) {
                    if (preg_match($patternUpper, $value) && preg_match($patternLower, $value)) {
                        return true;
                    }
                }
            }
        });
    }
}
