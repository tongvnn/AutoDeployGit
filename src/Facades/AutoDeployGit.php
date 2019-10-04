<?php

namespace dvms\AutoDeployGit\Facades;

use Illuminate\Support\Facades\Facade;

class AutoDeployGit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'auto-deploy-git';
    }
}
