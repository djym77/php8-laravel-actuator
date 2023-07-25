<?php

namespace Djym77\LaravelActuator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Djym77\LaravelActuator\Commands\LaravelActuatorCommand;

class LaravelActuatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-actuator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-actuator_table')
            ->hasCommand(LaravelActuatorCommand::class);
    }
}
