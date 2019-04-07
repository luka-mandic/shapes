<?php


namespace App\Service;


use App\Model\BaseShape;

class ShapeSum
{
    public function surfaceSum(BaseShape $object1, BaseShape $object2)
    {
        return $object1->getSurface() + $object2->getSurface();
    }

    public function circumferenceSum(BaseShape $object1, BaseShape $object2)
    {
        return $object1->getCircumference() + $object2->getCircumference();
    }
}