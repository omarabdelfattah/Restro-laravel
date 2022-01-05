<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    
    public function test_example()
    {
        $response = $this->get('/');
        $response = $this->get('/login');
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testLoginPost(){
        \Session::start();
        $response = $this->call('POST', '/login', [
            'email' => 'omar@omar.com',
            'password' => bcrypt(1234),
            '_token' => csrf_token()
        ]);
        $response->assertSessionHasErrors();
    }

   public function test_it_allow_logged_in_user_to_visit_home_page()
    {
        \Session::start();


        $response = $this->get('/');

        $response->assertOk();
    }



    public function testRegisterPost(){
        $name =  'fffkkk'.rand(3,99);
        $user = [
            'name' => $name,
            'email' => 'fffkkk'.rand(3,99).'@omar.com',
            'password' => bcrypt(1234),
            'location' => "el ramel station",
            'phone' => 565464,
            'gender' => 1,
            'credit_card'    => '5465645656',

        ];

        $response = $this->post('/register', $user)
        ->assertRedirect('/');

        $this->assertDatabaseHas('users', ['name' => $name]);
    }


    public function test_it_redirects_guest_to_login_when_he_visit_checkout_page()
    {
        $response = $this->get('/checkout');
        $response->assertRedirect('/login');
    }
}
