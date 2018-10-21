<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FormTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testFormresponse()
    {
        $response = $this->json('POST','/enviarmensaje', ['name'=>'Javier']);
        $response->assertStatus(200)->assertJson(['html'=>1]);
    }
}
