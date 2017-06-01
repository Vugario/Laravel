<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * Test the index endpoint returns users
     *
     * @return void
     */
    public function testIndexUserTest()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
    }
}
