<?php

namespace Varas\Euler;

class Problem5Test extends \PHPUnit_Framework_TestCase
{
    private static $input = 10;
    private static $expectedOutput = 2520;

    public function testSolve()
    {
        $sut = new Problem5();
        $this->assertEquals(self::$expectedOutput, $sut->solve(self::$input));
    }
}
