<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
       
Validator::extend('custom_email', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^[a-zA-Z0-9._-]{5,}@([a-zA-Z0-9-]{4,})\.(tn|com|fr)$/', $value);
        });
    }
}
