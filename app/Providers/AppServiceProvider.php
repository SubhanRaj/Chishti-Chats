<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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

        // $checkUserLogin = checkUserLogin();
        // if ($checkUserLogin['status']) {
        //     $user_id = $checkUserLogin['data']['user_id'];
        // } else {
        //     $user_id = false;
        // }

        // view()->share('user_id', $user_id);
        View::composer('*', function ($view) {
            $checkUserLogin = checkUserLogin();
            if ($checkUserLogin['status']) {
                $user_id = $checkUserLogin['data']['user_id'];
            } else {
                $user_id = false;
            }
            $view->with('user_id', $user_id);
        });
    }
}
