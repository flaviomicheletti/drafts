<?php
require_once 'SomeClass.php';

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testReturnArgumentStub()
    {
        // Cria um esboço para a classe SomeClass.
        $stub = $this->getMockBuilder('SomeClass')
                     ->getMock();

        // Configura o esboço.
        $stub->method('doSomething')
             ->will($this->returnArgument(0));

        // $stub->doSomething('foo') retorna 'foo'.
        $this->assertEquals('foo', $stub->doSomething('foo'));

        // $stub->doSomething('bar') retorna 'bar'.
        $this->assertEquals('bar', $stub->doSomething('bar'));
    }
}