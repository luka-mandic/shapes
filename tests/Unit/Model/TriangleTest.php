<?php


namespace App\Tests\Unit\Model;


use App\Model\Triangle;
use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{
    public function testCircumference()
    {
        $triangle = new Triangle(4,5,6);
        $triangle->circumference();

        $this->assertEquals(15, $triangle->getCircumference());
    }

    public function testSurface()
    {
        $triangle = new Triangle(4,5,6);
        $triangle->surface();

        $this->assertEquals(9.92, $triangle->getSurface());
    }

    public function testJsonStructure()
    {
        $triangle = new Triangle(4,5,6);
        $triangle->surface();
        $triangle->circumference();

        $this->assertEquals([
            "type" => "triangle",
            "a" => 4,
            "b" => 5,
            "c" => 6,
            "circumference" => 15,
            "surface" => 9.92,
        ], $triangle->jsonStructure());
    }
}