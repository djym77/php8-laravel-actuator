<?php

declare(strict_types=1);

namespace Djym77\LaravelActuator\Tests\Health;

use Djym77\LaravelActuator\Health\HealthContributor;

class DummyHealthContributor implements HealthContributor
{
    public function run(): string
    {
        return 'dummy-data';
    }
}
