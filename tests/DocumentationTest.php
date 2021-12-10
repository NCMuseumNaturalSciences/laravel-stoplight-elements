<?php

declare(strict_types=1);

namespace NCMuseumNaturalSciences\Laravel\LaravelStoplight\Tests;

use NCMuseumNaturalSciences\Laravel\LaravelStoplight\Tests\TestCase;

class DocumentationTest extends TestCase
{
    /**
     * @test
     */
    public function it_responds_as_expected()
    {
        $response = $this->get(config('stoplight.path.development.url'));

        $response->assertStatus(200);
    }
}
