<?php

namespace Varas\Euler;

use function Varas\Math\maxPrimeFactor;

/**
 * Largest prime factor
 *
 * The prime factors of 13195 are 5, 7, 13 and 29.
 *
 * What is the largest prime factor of the number 600851475143 ?
 */
class Problem3
{
    public function getTitle()
    {
        return __CLASS__;
    }

    public function getSolution()
    {
        return $this->solve(600851475143);
    }

    /**
     * See: http://en.wikipedia.org/wiki/Sieve_of_Eratosthenes
     */
    public function solve($givenNumber)
    {
        return maxPrimeFactor($givenNumber);
    }
}
