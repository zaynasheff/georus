<?php


namespace Zaynasheff\Georus;



use Illuminate\Support\ServiceProvider;


class GeorusServiceProvider extends ServiceProvider
{

    /**
     * Register the package services.
     *
     * @return void
     */
    public function register()
    {

    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {

        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ], 'georus-migrations');


        $this->publishes([
            __DIR__.'/database/seeders' => database_path('seeders'),
        ], 'georus-seeders');


        $this->publishes([
            __DIR__.'/database/data' => database_path('data/georus'),
        ], 'georus-data');
    }


}
