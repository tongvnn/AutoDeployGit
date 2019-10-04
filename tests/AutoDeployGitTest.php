<?php

namespace dvms\AutoDeployGit\Tests;

use dvms\AutoDeployGit\Facades\AutoDeployGit;
use dvms\AutoDeployGit\ServiceProvider;
use Orchestra\Testbench\TestCase;

class AutoDeployGitTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'auto-deploy-git' => AutoDeployGit::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
