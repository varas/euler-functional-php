# Euler Project solved with functional PHP

## Approach

Euler Project are mainly mathematical problems, so a bunch of functions will be developed
when needed solve the problems. In the case there is an evident (php) functional approach,
that will be used.

As PHP 5.6 places functions as first class citizens, it should be used to import
with `use funtion` the algorithms.

Each function is covered by tests and each problem uses a test based on the problem
specification to give feedback.

## Requirements

- PHP 5.6.0+

## Usage

CLI runner:

    php src/app.php

## Tests

Install test framework

    composer install

Basic test run

    bin/phpunit

Show specification tests break down run

    bin/phpunit --testdox

Show execution times for tests

*Handy when developing diferent approaches*

    bin/phpunit -c phpunit-show-times.xml

