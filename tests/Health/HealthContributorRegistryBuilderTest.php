<?php

namespace Djym77\LaravelActuator\Tests\Health;

use Illuminate\Foundation\Application;
use Djym77\LaravelActuator\Health\HealthContributor;
use Djym77\LaravelActuator\Health\HealthContributorRegistry;
use Djym77\LaravelActuator\Health\HealthContributorRegistryBuilder;
use Djym77\LaravelActuator\Health\StatusContributor;
use Orchestra\Testbench\TestCase;

class HealthContributorRegistryBuilderTest extends TestCase
{
    /** @test */
    public function it_can_create_a_health_registry(): void
    {
        $this->app['config']->set('actuator.health.contributors', []);

        $registry = (new HealthContributorRegistryBuilder())->build();

        $this->assertInstanceOf(HealthContributorRegistry::class, $registry);
    }

    /** @test */
    public function it_sets_array_of_contributors(): void
    {
        $this->app['config']->set('actuator.health.contributors', [
            'status' => StatusContributor::class,
            'dummy' => DummyHealthContributor::class,
        ]);

        $registry = (new HealthContributorRegistryBuilder())->build();

        $this->assertCount(2, $registry->getAll());
    }

    /** @test */
    public function it_can_build_dependencies(): void
    {
        $this->app['config']->set('actuator.health.contributors', [
            'dummy' => DummyContributorWithDependencies::class,
        ]);

        $registry = (new HealthContributorRegistryBuilder())->build();

        $this->assertCount(1, $registry->getAll());
    }
}

class DummyContributorWithDependencies implements HealthContributor
{
    /**
     * @var Application
     */
    private $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function run()
    {
    }
}
