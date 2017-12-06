<?php

namespace Westery\GeoHash;
use Illuminate\Support\ServiceProvider;

/**
 * Class GeoHashProvider
 * @package Westery\GeoHash
 */
class GeoHashProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('GeoHash', function ($app) {
            $app = new GeoHash();
            return $app;
        });
    }
}
