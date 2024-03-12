<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_homepage_loads_correctly()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_homepage_contains_faq()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSeeInOrder(['FAQ', 'Antoine Daniel a répondu au peuple']);
    }
}
