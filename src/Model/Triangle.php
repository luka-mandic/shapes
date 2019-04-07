<?php


namespace App\Model;


class Triangle extends BaseShape
{
    private $a;
    private $b;
    private $c;


    /**
     * The 3 sides of a triangle
     *
     * @param $a
     * @param $b
     * @param $c
     */
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function circumference()
    {
        $this->setCircumference($this->a + $this->b + $this->c);
    }

    /**
     * Calculated using Heron's formula:
     *
     * https://www.mathsisfun.com/geometry/herons-formula.html
     */
    public function surface()
    {
        $s = ($this->a + $this->b + $this->c) / 2;

        $this->setSurface(sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c)));
    }

    public function jsonStructure()
    {
        return [
            "type" => "triangle",
            "a" => $this->a,
            "b" => $this->b,
            "c" => $this->c,
            "circumference" => $this->getCircumference(),
            "surface" => $this->getSurface(),
        ];
    }
}