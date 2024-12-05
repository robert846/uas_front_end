<?php

namespace App\Providers;

use Laravel\Fortify\Fortify;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Mengarahkan Fortify ke view login
        Fortify::loginView(function () {
            return view('pages.auth.login');
        });

        // Jika Anda juga mengatur halaman register
        Fortify::registerView(function () {
            return view('pages.auth.register');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
