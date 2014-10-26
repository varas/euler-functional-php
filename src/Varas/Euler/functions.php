<?php

namespace Varas\Math;

/**
 * Returns true if a given number is multiple of 3 or 5
 *
 * @param  int $num Number
 * @return boolean  Is multiple
 */
function isMultipleOf3Or5($num)
{
    return ($num%3 === 0 or $num%5 ===0);
}

/**
 * Adds 2 numbers
 * Predicate for functional usage
 *
 * @param int $a    First number to add
 * @param int $b    Number to add
 * @return int      Addition
 */
function add($a, $b)
{
    return $a + $b;
}
