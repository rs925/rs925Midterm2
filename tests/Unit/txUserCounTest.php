<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class txUserCounTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCount()
    {
        //$this->assertTrue(true);
        $user = User::All();
        $recCount = $user->count();
        $this->assertEquals(50,$recCount);

    }
}