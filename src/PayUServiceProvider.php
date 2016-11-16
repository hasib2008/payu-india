<?php
namespace Hasib\PayU;

use Illuminate\Support\ServiceProvider;
class PayUServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
         $this->publishes([__DIR__.'/config/config.php' => config_path('payU.php'),
        ]);
         $this->mergeConfigFrom(
            __DIR__.'/config/config.php',
            'payU'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__.'/routes.php';
        $this->app->make('Hasib\PayU\PayUController');
    }

}
