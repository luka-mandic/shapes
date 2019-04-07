<?php


namespace App\Tests\Unit\Service;


use App\Model\Circle;
use App\Model\Triangle;
use App\Service\ShapeSum;
use PHPUnit\Framework\TestCase;

class ShapeSumTest extends TestCase
{
    public function testSurfaceSum()
    {
        $sum = new ShapeSum();
        $triangle = new Triangle(4,5,6);
        $triangle->surface();
        $circle = new Circle(5);
        $circle->surface();

        $this->assertEquals(88.46, $sum->surfaceSum($triangle, $circle));
    }

    public function testCircumferenceSum()
    {
        $sum = new ShapeSum();
        $triangle = new Triangle(4,5,6);
        $triangle->circumference();
        $circle = new Circle(5);
        $circle->circumference();

        $this->assertEquals(46.42, $sum->circumferenceSum($triangle, $circle));
    }
}