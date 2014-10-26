<?php

namespace Varas\Math;

class FunctionsTest extends \PHPUnit_Framework_TestCase
{
    public function testIsMultipleOf3or5()
    {
        $this->assertTrue(isMultipleOf3Or5(3));
        $this->assertTrue(isMultipleOf3Or5(5));
        $this->assertTrue(isMultipleOf3Or5(6));
        $this->assertFalse(isMultipleOf3Or5(1));
        $this->assertFalse(isMultipleOf3Or5(4));
        $this->assertFalse(isMultipleOf3Or5(7));
    }
}
