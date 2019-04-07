<?php


namespace App\Validator;


class Validator
{
    public $error;
    
    
    /**
     * Check if inputs are numeric values higher than 0
     *
     * @param array $inputs
     * @return bool
     */
    public function validateInputs(array $inputs)
    {
        foreach ($inputs as $input) {
            if (is_numeric($input) && $input > 0){
                continue;
            }
            $this->error['error'] = "Input is invalid: " . $input;
            return false;
        }

        return true;
    }

    /**
     * The Triangle Inequality Theorem states that the sum of any 2 sides of a triangle must be
     * greater than the measure of the third side.
     *
     * @param $a
     * @param $b
     * @param $c
     * @return bool
     */
    public function validateTriangleInequalityTheorem($a, $b, $c)
    {
        if ($a + $b > $c && $a +$c > $b && $b + $c > $a) {
            return true;
        }

        $this->error['error'] = "The sum of any 2 sides of a triangle must be greater than the measure of the third side";
        return false;
    }
}