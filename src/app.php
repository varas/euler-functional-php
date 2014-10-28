<?php

require_once __DIR__.'/../vendor/autoload.php';

$problemNumbers = [1, 2, 3, 4];

$problemFactory = function($problemNumber) {
    $problemClass = 'Varas\Euler\Problem'.$problemNumber;
    return new $problemClass();
};

$problemPrinter = function($problem) {
    echo $problem->getTitle().": ".$problem->getSolution()."\n";
};

$problems = array_map($problemFactory, $problemNumbers);

array_map($problemPrinter, $problems);
