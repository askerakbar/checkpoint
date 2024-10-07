<?php

namespace AskerAkbar\Checkpoint\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->setUpDatabase($this->app);
    }

    protected function getPackageProviders($app): array
    {
        return [];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
    }

    protected function setUpDatabase($app): void {}
}
