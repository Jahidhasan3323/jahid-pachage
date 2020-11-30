<?php

namespace Test\Pk;

use Illuminate\Support\ServiceProvider;

class ManiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        var_dump('lll');
        exit();
    }
}
