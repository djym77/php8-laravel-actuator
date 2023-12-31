<?php

declare(strict_types=1);

namespace Djym77\LaravelActuator\Health;

use Illuminate\Support\Collection;

class HealthContributorRegistry
{
    private $contributors = [];

    public function register(string $name, HealthContributor $class): void
    {
        $this->contributors[$name] = $class;
    }

    public function getAll(): Collection
    {
        return collect($this->contributors);
    }

    public function findByName(string $name): ?HealthContributor
    {
        if (! array_key_exists($name, $this->contributors)) {
            return null;
        }

        return $this->contributors[$name];
    }
}
