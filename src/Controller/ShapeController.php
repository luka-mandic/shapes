<?php

namespace App\Controller;

use App\Model\Circle;
use App\Model\Triangle;
use App\Validator\Validator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShapeController extends AbstractController
{
    /**
     * @var Validator
     */
    private $validator;

    /**
     * ShapeController constructor.
     * @param Validator $validator
     */
    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function triangle($a, $b, $c)
    {
        if(!$this->validator->validateInputs([$a, $b, $c])){
            return $this->json($this->validator->error, 422);
        }

        if(!$this->validator->validateTriangleInequalityTheorem($a, $b, $c)){
            return $this->json($this->validator->error, 422);
        }
        $triangle = new Triangle($a, $b, $c);
        $triangle->circumference();
        $triangle->surface();

        return $this->json($triangle->jsonStructure());


    }


    public function circle($radius)
    {
        if(!$this->validator->validateInputs([$radius])){
            return $this->json($this->validator->error, 422);
        }

        $circle = new Circle($radius);
        $circle->circumference();
        $circle->surface();

        return $this->json($circle->jsonStructure());
    }
}
