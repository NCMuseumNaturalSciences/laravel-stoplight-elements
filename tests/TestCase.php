<?php

declare(strict_types=1);

namespace NCMuseumNaturalSciences\Laravel\LaravelStoplight\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use NCMuseumNaturalSciences\Laravel\LaravelStoplight\StoplightServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            StoplightServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('stoplight.path.development.url', 'api/docs/development');
        config()->set('stoplight.path.production.url', 'api/docs/production');
    }
}
