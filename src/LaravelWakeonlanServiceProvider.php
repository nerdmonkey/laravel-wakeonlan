<?php

namespace Nerdmonkey\LaravelWakeonlan;

use Nerdmonkey\LaravelWakeonlan\Commands\LaravelWakeonlanCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelWakeonlanServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-wakeonlan')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-wakeonlan_table')
            ->hasCommand(LaravelWakeonlanCommand::class);
    }
}
