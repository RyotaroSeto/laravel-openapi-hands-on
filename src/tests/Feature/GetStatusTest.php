<?php

namespace Tests\Feature;

use Spectator\Spectator;
use Tests\TestCase;

class GetStatusTest extends TestCase
{
    /**
     * @return void
     */
    public function testNormal()
    {
        Spectator::using('openapi.yaml');
        $this->get('/api/status')
            ->assertValidResponse(500);
    }
}
