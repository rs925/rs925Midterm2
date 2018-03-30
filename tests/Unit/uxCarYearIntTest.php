<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class uxCarYearIntTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearType()
    {

        $car= Car::find(10);
        $caryear = (int) $car->year;
        $this->assertInternalType('integer' , $caryear);


    }
}