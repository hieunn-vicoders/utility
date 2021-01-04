<?php

namespace VCComponent\Laravel\Utility\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class UtilityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'utility');
        $this->publishes([
            __DIR__ . '/../../config/utility.php'                       => config_path('utility.php'),
            __DIR__ . '/../../resources/scss/utility/css/_hotline.scss' => base_path('/resources/sass/utility/_hotline.scss'),
            __DIR__ . '/../../resources/scss/utility/icon-2.png'        => base_path('/public/images/utility/icon-2.png'),
        ]);
    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
    }
}
