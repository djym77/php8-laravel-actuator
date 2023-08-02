<?php

namespace Djym77\LaravelActuator;

use Djym77\LaravelActuator\Health\HealthBuilder;
use Djym77\LaravelActuator\Health\HealthContributorRegistry;
use Djym77\LaravelActuator\Health\HealthContributorRegistryBuilder;
use Illuminate\Support\ServiceProvider;

class LaravelActuatorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/actuator.php' => config_path('actuator.php'),
            ], 'config');
        }
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/actuator.php', 'actuator');

        $this->app->singleton(HealthContributorRegistry::class, static function () {
            return (new HealthContributorRegistryBuilder())->build();
        });
        $this->app->singleton(HealthBuilder::class, static function ($app) {
            return new HealthBuilder($app[HealthContributorRegistry::class]);
        });
    }
}
