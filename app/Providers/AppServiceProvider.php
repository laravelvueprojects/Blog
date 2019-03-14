<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
     * As outlined in the Migrations guide to fix this all you have 
     * to do is edit your AppServiceProvider.php file 
     * and inside the boot method set a default string length:
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
