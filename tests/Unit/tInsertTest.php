<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class tInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsert()
    {
        $user = new User();
        $user -> name ='Rahul Sharan';
        $user -> email = 'rs925@njit.edu';
        $user -> password = 'passpass';
        $this->assertTrue($user->save());
    }
}
