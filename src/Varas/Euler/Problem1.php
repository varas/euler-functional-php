<?php

namespace Varas\Euler;

/**
 * Multiples of 3 and 5
 *
 * If we list all the natural numbers below 10 that are multiples of 3 or 5,
 * we get 3, 5, 6 and 9. The sum of these multiples is 23.
 *
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */
class Problem1
{
    public function getTitle()
    {
        return __CLASS__;
    }

    public function getSolution()
    {
        return $this->solve(1000);
    }

    public function solve($givenNumber)
    {
        $numbers = range(1, $givenNumber - 1);
        $multiplesOf3Or5 = array_filter($numbers, 'Varas\Math\isMultipleOf3Or5');
        return array_reduce($multiplesOf3Or5, 'Varas\Math\add');
    }
}
