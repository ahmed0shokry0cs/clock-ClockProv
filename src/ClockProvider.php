<?php

namespace Clock\ClockProv;

use Illuminate\Support\ServiceProvider;
use Clock\ClockProv\ClockFacade;

class ClockProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if( ! file_exists(base_path('config').'/clock_config.php' ))
        {
          $this->publishes([ __DIR__.'/tools'=>base_path('config') ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->singleton(ClockFacade::class, function ($app) {
            return new ClockFacade();
        });

    }
}
