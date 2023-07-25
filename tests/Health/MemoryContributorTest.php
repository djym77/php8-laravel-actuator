<?php

namespace Djym77\LaravelActuator\Tests\Health;

use Djym77\LaravelActuator\Health\MemoryContributor;
use PHPUnit\Framework\TestCase;

final class MemoryContributorTest extends TestCase
{
    /** @test */
    public function it_returns_an_array_with_free_and_total_memory(): void
    {
        $memoryContributor = new MemoryContributor();

        $this->assertArrayHasKey('free', $memoryContributor->run());
        $this->assertArrayHasKey('memory', $memoryContributor->run());
    }
}
