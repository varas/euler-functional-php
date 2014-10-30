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

    public function testAdd()
    {
        $this->assertEquals(0, add(0,0));
        $this->assertEquals(1, add(0,1));
        $this->assertEquals(2, add(1,1));
        $this->assertEquals(22, add(12,10));
    }

    public function testMaxPrimeFactor()
    {
        $this->assertEquals(2, maxPrimeFactor(4));
        $this->assertEquals(3, maxPrimeFactor(6));
        $this->assertEquals(7, maxPrimeFactor(14));
        $this->assertEquals(7, maxPrimeFactor(35));
    }

    public function testCartesianProductWithOneItems()
    {
        $arrayA = ['a'];
        $arrayB = ['b'];
        $expected = ['a','b'];

        $this->assertContains($expected, cartesianProduct([$arrayA, $arrayB]));
    }

    public function testCartesianProductWithSeveralItems()
    {
        $arrayA = ['a','b'];
        $arrayB = ['1','2'];
        $expected = [   ['a','1'],
                        ['a','2'],
                        ['b','1'],
                        ['b','2']
                    ];

        $result = cartesianProduct([$arrayA, $arrayB]);

        $this->assertEquals($expected, $result);
    }

    public function testProductBidimentionalArray()
    {
        $input = [  [1,1],
                    [2,2],
                 ];
        $expected = [1,4];

        $result = array_map('Varas\Math\productBidimentinalArray', $input);

        $this->assertEquals($expected, $result);
    }

    public function testIsPalindrome()
    {
        $this->assertTrue(isPalindrome(0));
        $this->assertTrue(isPalindrome(11));
        $this->assertTrue(isPalindrome(101));
        $this->assertTrue(isPalindrome('101'));
        $this->assertFalse(isPalindrome(13));
        $this->assertFalse(isPalindrome(491));
    }

    public function testIsPrime()
    {
        $this->assertFalse(isPrime(1));
        $this->assertTrue (isPrime(2));
        $this->assertTrue (isPrime(3));
        $this->assertFalse(isPrime(4));
        $this->assertTrue (isPrime(5));
        $this->assertFalse(isPrime(6));
        $this->assertTrue (isPrime(7));
        $this->assertFalse(isPrime(8));
        $this->assertFalse(isPrime(9));
        $this->assertFalse(isPrime(10));
        $this->assertTrue (isPrime(11));
    }

    public function testLeastCommonMultiple()
    {
        $this->assertEquals(6,  leastCommonMultiple(2,3));
        $this->assertEquals(36, leastCommonMultiple(12,18));
        $this->assertEquals(42, leastCommonMultiple(21,6));
    }

    public function testLeastCommonMultipleAsPredicate()
    {
        $arr = [2,3];
        $this->assertEquals(6, array_reduce($arr, 'Varas\Math\leastCommonMultiple', 1));
    }

    public function testGreatestCommonDivisor()
    {
        $this->assertEquals(1, greatestCommonDivisor(1,3));
        $this->assertEquals(4, greatestCommonDivisor(12,8));
        $this->assertEquals(5, greatestCommonDivisor(10,15));
    }
}
