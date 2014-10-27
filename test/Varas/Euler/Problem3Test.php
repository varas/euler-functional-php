<?php

namespace Varas\Euler;

class Problem3Test extends \PHPUnit_Framework_TestCase
{
    private static $input = 13195;
    private static $expectedOutput = 29;

    public function testSolve()
    {
        $sut = new Problem3();
        $this->assertEquals($sut->solve(self::$input), self::$expectedOutput);
    }
}
