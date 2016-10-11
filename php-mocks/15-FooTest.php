<?php
class FooTest extends PHPUnit_Framework_TestCase
{
    public function testIdenticalObjectPassed()
    {
        $cloneArguments = true;

        $mock = $this->getMockBuilder('stdClass')
                     ->enableArgumentCloning()
                     ->getMock();

        $mock;
        // now your mock clones parameters so the identicalTo constraint
        // will fail.
    }
}
?>