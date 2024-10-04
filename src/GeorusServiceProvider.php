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
    public function boot()
    {
        $this->publishesMigrations([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ]);


    }


}
