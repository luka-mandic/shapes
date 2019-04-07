<?php


namespace App\Model;


class Circle extends BaseShape
{

    private $radius;

    /**
     * Circle constructor.
     * @param $radius
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function circumference()
    {
        $this->setCircumference(2 * $this->radius * pi());
    }

    public function surface()
    {
        $this->setSurface($this->radius * $this->radius * pi());
    }

    public function jsonStructure()
    {
        return [
            "type" => "circle",
            "radius" => $this->radius,
            "circumference" => $this->getCircumference(),
            "surface" => $this->getSurface(),
        ];
    }

}