<?php

namespace Varas\Euler;

class Problem1Test extends \PHPUnit_Framework_TestCase
{
    private static $input = 10;
    private static $expectedOutput = 23;

    public function testSolve()
    {
        $sut = new Problem1();
        $this->assertEquals($sut->solve(self::$input), self::$expectedOutput);
    }
}
