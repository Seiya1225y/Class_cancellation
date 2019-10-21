<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Hometest extends TestCase
{
    public function testStatusCode(){
        $respone = $this->get('/home');

        $respone->assertStatus(200);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBody()
    {
        $response = $this->get('/home');

        $response->assertSeeText("こんにちは！");
    }
}
