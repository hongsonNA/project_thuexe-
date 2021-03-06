<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(
            \App\Repositories\VehicelRepositoryInterface::class,
            \App\Repositories\PostRepository::class
        );

        $this->app->singleton(
            \App\Repositories\VehicelRepositoryInterface::class,
            \App\Repositories\UserRepository::class
        );

        $this->app->singleton(
            \App\Repositories\VehicelRepositoryInterface::class,
            \App\Repositories\CityRepository::class
        );

        $this->app->singleton(
            \App\Repositories\VehicelRepositoryInterface::class,
            \App\Repositories\ModelCarRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
    }
}
