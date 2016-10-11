<?php
require_once 'SomeClass.php';

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testThrowExceptionStub()
    {
        // Cria um esboço para a classe SomeClass.
        $stub = $this->getMockBuilder('SomeClass')
                     ->getMock();

        // Configura o esboço.
        $stub->method('doSomething')
             ->will($this->throwException(new Exception));

        // $stub->doSomething() lança Exceção
        $stub->doSomething();
    }
}
