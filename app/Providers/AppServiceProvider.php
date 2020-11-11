<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider;
use Way\Generators\GeneratorsServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    if ($this->app->environment() !== 'production') {
       $this->app->register(\Way\Generators\GeneratorsServiceProvider::class);
       $this->app->register(\Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class);
    }
    // ...
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
