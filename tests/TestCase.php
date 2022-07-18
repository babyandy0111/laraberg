<?php

namespace Babyandy0111\Laraberg\Test;

use Babyandy0111\Laraberg\LarabergFacade;
use Babyandy0111\Laraberg\LarabergServiceProvider;
use Orchestra\Testbench\Testcase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return Babyandy0111\Laraberg\LarabergServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [LarabergServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Laraberg' => LarabergFacade::class,
        ];
    }
}

