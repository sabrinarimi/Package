<?php

namespace pk\calculator;

use Illuminate\Support\ServiceProvider;
use function Symfony\Component\HttpKernel\HttpCache\load;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('pk\calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/views','calculator');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include  __DIR__.'/routes.php';
    }
}
