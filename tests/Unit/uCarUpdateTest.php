<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class uCarUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarUpdate()
    {
        $car= Car::find(51);
        $car -> Year = '2000';
        $this -> assertTrue($car->save());

    }
}