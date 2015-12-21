<?php

namespace Rofil\FTIK;

use Illuminate\Support\ServiceProvider;

class RofilFTIKServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'RofilFTIK');
        $this->publishes([__DIR__.'/public'=>public_path("rofil-ftik")], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
