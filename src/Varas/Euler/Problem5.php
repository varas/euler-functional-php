<?php

namespace Varas\Euler;

/**
 * Smallest multiple
 *
 * 2520 is the smallest number that can be divided by each of the numbers
 * from 1 to 10 without any remainder.
 *
 * What is the smallest positive number that is evenly divisible by all
 * of the numbers from 1 to 20?
 */
class Problem5
{
    public function getTitle()
    {
        return __CLASS__;
    }

    public function getSolution()
    {
        return $this->solve(20);
    }

    /**
     * The smallest number that can be divided by each of the numbers
     * is the multiple of all its primes
     */
    public function solve($givenNumber)
    {
        $numbers = range(1, $givenNumber);
        return array_reduce($numbers, 'Varas\Math\leastCommonMultiple', 1);
    }
}
