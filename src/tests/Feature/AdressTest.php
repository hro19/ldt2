<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdressTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(302);

        $response2 = $this->get('/folders/4/tasks');
        $response2->assertStatus(302);

        // $user = factory(User::class)->create();
        // $response3 = $this->actingAs($user)->get('/');
        // $response3->assertStatus(200);

        $response4 = $this->get('/noroute');
        $response4->assertStatus(404);

    }

}
