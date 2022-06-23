<?php

namespace Dfytech\Worldtime;

use Illuminate\Support\ServiceProvider;

class WorldtimeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'worldtime');
    }

    public function register()
    {

    }
}