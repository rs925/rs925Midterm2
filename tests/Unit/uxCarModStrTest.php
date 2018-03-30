<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class uxCarModStrTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMod()
    {
        $car = Car::find(1);
        $car_mod = $car -> Model;
        $this -> assertInternalType('string',$car_mod);
    }
}