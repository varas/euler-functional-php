<?php

namespace Varas\Euler;

use function Varas\Math\cartesianProduct;

/**
 * Largest palindrome product
 *
 * A palindromic number reads the same both ways. The largest palindrome made
 * from the product of two 2-digit numbers is 9009 = 91 × 99.
 *
 * Find the largest palindrome made from the product of two 3-digit numbers.
 */
class Problem4
{
    public function getTitle()
    {
        return __CLASS__;
    }

    public function getSolution()
    {
        return $this->solve(3);
    }

    public function solve($numberOfDigits)
    {
        $limit = str_repeat(9, $numberOfDigits);

        $digitsA = range(1, $limit);
        $digitsB = range(1, $limit);

        $digitsCombination = cartesianProduct([$digitsA, $digitsB]);

        $digitsProducts = array_map('Varas\Math\productBidimentinalArray', $digitsCombination);

        $palidromes = array_filter($digitsProducts, 'Varas\Math\isPalindrome');

        return max($palidromes);
    }
}
