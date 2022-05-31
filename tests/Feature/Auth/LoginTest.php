<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
   {
       $create = User::create([
           'name' => 'dimas heru',
           'email'=> 'bbbbbbb@gmail.com',
           'password'=> bcrypt('1234'),
           'role' => 'user',

       ]);
       if (!$create){
           $this->assertTrue(false);
       }
       $this->assertTrue(true);

    }
    
}