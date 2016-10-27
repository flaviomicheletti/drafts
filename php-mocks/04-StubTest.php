<?php
require_once 'SomeClass.php';

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testReturnSelf()
    {
        // Cria um esboço para a classe SomeClass.
        $stub = $this->getMockBuilder('SomeClass')
                     ->getMock();

        // Configura o esboço.
        $stub->method('doSomething')
             ->will($this->returnSelf());

        // $stub->doSomething() retorna $stub
        $this->assertSame($stub, $stub->doSomething());
    }
}