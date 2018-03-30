<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class uxCarCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarCount()
    {
        $temp = Car::All();
        $recCount = $temp->count();
        $this->assertEquals(50,$recCount);

    }
}