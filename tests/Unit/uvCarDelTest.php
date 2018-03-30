<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class uvCarDelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarDel()
    {
        $temp = Car::find(51);
        $this -> assertTrue($temp->delete());

        //$this->assertTrue(true);
    }
}