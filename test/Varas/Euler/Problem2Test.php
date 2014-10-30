<?php

namespace Varas\Euler;

class Problem2Test extends \PHPUnit_Framework_TestCase
{
    private static $input = 10;
    private static $expectedOutput = 44;

    /**
     * For 10:
     * Its fibonaccis are: 1, 2, 3, 5, 8, 13, 21, 34, 55, 89
     * The sum of even valued is: 2 + 8 + 34 = 44
     */
    public function testSolve()
    {
        $sut = new Problem2();
        $this->assertEquals(self::$expectedOutput, $sut->solve(self::$input));
    }
}
