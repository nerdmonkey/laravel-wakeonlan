<?php

namespace Nerdmonkey\LaravelWakeonlan\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nerdmonkey\LaravelWakeonlan\LaravelWakeonlanServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nerdmonkey\\LaravelWakeonlan\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelWakeonlanServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-wakeonlan_table.php.stub';
        $migration->up();
        */
    }
}
