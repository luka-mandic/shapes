<?php


namespace App\Model;


abstract class BaseShape
{

    protected $circumference;
    protected $surface;

    /**
     * @return mixed
     */
    public function getCircumference()
    {
        return $this->circumference;
    }

    /**
     * @param mixed $circumference
     */
    public function setCircumference($circumference): void
    {
        $this->circumference = round($circumference, 2);
    }

    /**
     * @return mixed
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @param mixed $surface
     */
    public function setSurface($surface): void
    {
        $this->surface = round($surface, 2);
    }


    public abstract function circumference();

    public abstract function surface();

    public abstract function jsonStructure();
}