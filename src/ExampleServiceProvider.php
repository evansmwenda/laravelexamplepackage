<?php

namespace EvansMwenda\Example;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use EvansMwenda\Example\Commands\ExampleCommand;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravelexamplepackage')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravelexamplepackage_table')
            ->hasCommand(ExampleCommand::class);
    }
}
