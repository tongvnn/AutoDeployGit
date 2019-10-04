<?php

namespace dvms\AutoDeployGit;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/auto-deploy-git.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('auto-deploy-git.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'auto-deploy-git'
        );

        $this->app->bind('auto-deploy-git', function () {
            return new AutoDeployGit();
        });
    }
}
