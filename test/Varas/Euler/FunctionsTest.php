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

    public function testFibonacci()
    {
        $this->assertEquals(fibonacci(1), 1);
        $this->assertEquals(fibonacci(2), 2);
        $this->assertEquals(fibonacci(3), 3);
        $this->assertEquals(fibonacci(4), 5);
        $this->assertEquals(fibonacci(5), 8);
        $this->assertEquals(fibonacci(6), 13);
        $this->assertEquals(fibonacci(7), 21);
    }

    public function testEvenValued()
    {
        $this->assertTrue(evenValued(0));
        $this->assertTrue(evenValued(2));
        $this->assertTrue(evenValued(4));
        $this->assertTrue(evenValued(10));
        $this->assertFalse(evenValued(1));
        $this->assertFalse(evenValued(3));
        $this->assertFalse(evenValued(5));
        $this->assertFalse(evenValued(11));
    }
}
