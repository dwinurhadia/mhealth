<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
// use Illuminate\Support\Env;
use Tests\TestCase;

class AppEnvirontmentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAppEnv()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
        var_dump(App::environtment());

    }
}
