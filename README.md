# Euler Project solved with functional PHP

## Approach

Euler Project are mainly mathematical problems, so a bunch of functions will be developed
when needed solve the problems. In the case there is an evident (php) functional approach,
that will be used.

As PHP 5.6 places functions as first class citizens, it should be used to import
with `use funtion` the math functions.

Each function is covered by tests and each problem uses a test based on the problem
statement to give test feedback and ensure algorithm validaton.

## Requirements

- PHP 5.6.0+

## Usage

CLI runner:

    php -dmemory_limit=1G src/app.php

Requires increasing php `memory_limit` (php arrays...) and takes its time.

## Tests

Install test framework

    composer install

Basic test run

    bin/phpunit

Show specification tests break down run

    bin/phpunit --testdox

        Varas\Math\Functions
         [x] Is multiple of 3or 5
         [x] Fibonacci
         [x] Even valued
         [x] Add
         [x] Prime factors
         [x] Cartesian product with one items
         [x] Cartesian product with several items
         [x] Product bidimentional array
         [x] Is palindrome

        Varas\Euler\Problem1
         [x] Solve

        Varas\Euler\Problem2
         [x] Solve

        Varas\Euler\Problem3
         [x] Solve

        Varas\Euler\Problem4
         [x] Solve

Show execution times for tests

*Handy when developing diferent approaches*

    bin/phpunit -c phpunit-show-times.xml

