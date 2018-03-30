<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class tUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdate()
    {


        $user = User::find(51);
        $user -> name ='Steeve Smith';
        $user -> email = 'steeve@njit.edu';
        $user -> password = 'passpass1';

        $this->assertTrue($user->save());
        //$this->assertTrue(true);
    }
}