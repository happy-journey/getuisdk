<?php

namespace Getuisdk\Getuisdk;

use Illuminate\Support\ServiceProvider;

class GetuisdkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('getuisdk',function(){
            return new getuisdk;
        });
    }
}
