<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response = $this->get('/login');
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function test_it_redirects_guest_to_login_when_he_visit_home_page()
    {
        $response = $this->get()->Route('checkout');

        $response->assertRedirect('/login');
    }

   public function test_it_allow_logged_in_user_to_visit_home_page()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user);

        $response = $this->get('/');

        $response->assertOk();
    }

    public function testLoginPost(){
        \Session::start();
        $response = $this->call('POST', '/login', [
            'email' => 'omar@omar.com',
            'password' => bcrypt(1234),
            '_token' => csrf_token()
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('auth.login', $response->original->name());
    }
}
