<?php


namespace App\Tests\Unit\Model;


use App\Model\Circle;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    public function testCircumference()
    {
        $circle = new Circle(5);
        $circle->circumference();

        $this->assertEquals(31.42, $circle->getCircumference());
    }

    public function testSurface()
    {
        $circle = new Circle(5);
        $circle->surface();

        $this->assertEquals(78.54, $circle->getSurface());
    }

    public function testJsonStructure()
    {
        $circle = new Circle(5);
        $circle->surface();
        $circle->circumference();

        $this->assertEquals([
            "type" => "circle",
            "radius" => 5,
            "circumference" => 31.42,
            "surface" => 78.54,
        ], $circle->jsonStructure());
    }
}