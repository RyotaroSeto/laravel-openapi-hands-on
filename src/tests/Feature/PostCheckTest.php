<?php

namespace Tests\Feature;

use Spectator\Spectator;
use Tests\TestCase;

class PostCheckTest extends TestCase
{
    /**
     * @return void
     */
    public function testNormal()
    {
        Spectator::using('openapi.yaml');
        $this->post('/api/check')
            ->assertValidResponse(200);
    }
}
