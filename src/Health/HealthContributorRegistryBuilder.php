<?php

declare(strict_types=1);

namespace Djym77\LaravelActuator\Health;

class HealthContributorRegistryBuilder
{
    public function build(): HealthContributorRegistry
    {
        $registry = new HealthContributorRegistry();
        $contributors = config('actuator.health.contributors');
        foreach ($contributors as $name => $contributor) {
            $registry->register($name, app($contributor));
        }

        return $registry;
    }
}
