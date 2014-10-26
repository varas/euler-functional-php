<?php

class PHPUnitTimeListener implements PHPUnit_Framework_TestListener
{
    public function __construct($showExecutionTime = false)
    {
        $this->showExecutionTime = $showExecutionTime;
    }

    public function startTest(PHPUnit_Framework_Test $test)
    {
        $this->time = microtime();
    }

    public function endTest(PHPUnit_Framework_Test $test, $time)
    {
        $current = microtime();
        $took = $current - $this->time;
        if ($this->showExecutionTime) {
            printf("\n%.6f ms ".$test->getName(), $took);
        }
    }

    public function addError(PHPUnit_Framework_Test $test, Exception $e, $time) {
    }
    public function addFailure(PHPUnit_Framework_Test $test, PHPUnit_Framework_AssertionFailedError $e, $time) {
    }
    public function addIncompleteTest(PHPUnit_Framework_Test $test, Exception $e, $time){
    }
    public function addRiskyTest(PHPUnit_Framework_Test $test, Exception $e, $time){
    }
    public function addSkippedTest(PHPUnit_Framework_Test $test, Exception $e, $time) {
    }
    public function startTestSuite(PHPUnit_Framework_TestSuite $suite) {
    }
    public function endTestSuite(PHPUnit_Framework_TestSuite $suite) {
    }
}
