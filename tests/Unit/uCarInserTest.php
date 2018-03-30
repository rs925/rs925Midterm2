<?php

namespace Tests\Unit;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class uCarInserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarInsert()
    {

        $car = new Car();
        $car ->  Make = 'Ford';
        $car -> Model='new1';
        $car -> Year='2018';
        $this -> assertTrue($car->save());

        //$this->assertTrue(true);
    }
}
