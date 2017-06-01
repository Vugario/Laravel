<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VenueTest extends TestCase
{
    /**
     * Test the index endpoint returns venues
     *
     * @return void
     */
    public function testIndexVenueTest()
    {
        $response = $this->get('/api/venues');

        $response->assertStatus(200);
    }
}
