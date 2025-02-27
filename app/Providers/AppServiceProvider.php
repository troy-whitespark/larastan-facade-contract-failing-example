<?php

namespace App\Providers;

use App\ExampleConcrete;
use App\ExampleInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ExampleInterface::class, fn () => new ExampleConcrete());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
