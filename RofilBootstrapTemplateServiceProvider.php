<?php

namespace Rofil\BootstrapTemplate;

use Illuminate\Support\ServiceProvider;

class RofilBootstrapTemplateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'RofilBT');
        $this->publishes([__DIR__.'/public'=>public_path("rofil-bootstrap-template")], 'public');
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
