<?php

namespace Djym77\LaravelActuator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Djym77\LaravelActuator\LaravelActuator
 */
class LaravelActuator extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Djym77\LaravelActuator\LaravelActuator::class;
    }
}
