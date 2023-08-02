<?php

// config for Djym77/LaravelActuator

use Djym77\LaravelActuator\Health\DatabaseContributor;
use Djym77\LaravelActuator\Health\DiskSpaceContributor;
use Djym77\LaravelActuator\Health\MemoryContributor;
use Djym77\LaravelActuator\Health\StatusContributor;

return [
    'health' => [
        'show-details' => true,
        'contributors' => [
            'status' => StatusContributor::class,
            'disk' => DiskSpaceContributor::class,
            'memory' => MemoryContributor::class,
            'db' => DatabaseContributor::class,
        ],
    ],
];