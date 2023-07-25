<?php

namespace Djym77\LaravelActuator\Commands;

use Illuminate\Console\Command;

class LaravelActuatorCommand extends Command
{
    public $signature = 'laravel-actuator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
