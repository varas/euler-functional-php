<?php

namespace Varas\Euler;

class Problem4Test extends \PHPUnit_Framework_TestCase
{
    private static $input = 2;
    private static $expectedOutput = 9009;

    public function testSolve()
    {
        $sut = new Problem4();
        $this->assertEquals(self::$expectedOutput, $sut->solve(self::$input));
    }
}
