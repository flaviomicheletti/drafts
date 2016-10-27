<?php

class FooTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionCalledTwoTimesWithSpecificArguments()
    {
        $mock = $this->getMockBuilder('stdClass')
                     ->setMethods(array('set'))
                     ->getMock();

        $mock->expects($this->exactly(2))
             ->method('set')
             ->withConsecutive(
                 array($this->equalTo('foo'), $this->greaterThan(0)),
                 array($this->equalTo('bar'), $this->greaterThan(0))
             )
             ->will($this->onConsecutiveCalls(12, 84));

        $this->assertEquals(12, $mock->set('foo', 21));
        $this->assertEquals(84, $mock->set('bar', 48));

    }
}
?>