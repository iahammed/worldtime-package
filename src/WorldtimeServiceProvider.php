<?php

namespace Dfytech\Worldtime;

use Illuminate\Support\ServiceProvider;
use Dfytech\Worldtime\Console\InstallationCommand;


class WorldtimeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->registerCommand();
        $this->registerConfig();
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'worldtime');
    }

    public function register()
    {

    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig() 
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('worldtime.php'),
        ], 'worldtime');
    }

    /**
     * Register Command.
     *
     * @return void
     */
    public function registerCommand () {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallationCommand::class,
            ]);
        }
    }
}