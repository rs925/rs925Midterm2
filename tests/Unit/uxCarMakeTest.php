<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Car;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class uxCarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $temp = Car::find(1);
        $car_make= $temp->Make;
        $this -> assertContains($car_make,['FORD','HONDA','TOYOTA']);
    }
}