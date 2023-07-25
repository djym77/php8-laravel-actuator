<?php

namespace Djym77\LaravelActuator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Commands\InstallCommand;

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
            ->hasRoute('web')
            ->hasCommand(LaravelActuatorCommand::class)
            ->hasInstallCommand(function(InstallCommand $command) {
                $command
                ->startWith(function(InstallCommand $command) {
                    $command->info('Hello, and welcome to my great new package!');
                })
                    ->publishConfigFile()
                    ->copyAndRegisterServiceProviderInApp()
                    ->endWith(function(InstallCommand $command) {
                        $command->info('Have a great day!');
                    });
            });
    }
}
