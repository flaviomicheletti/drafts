<?php
require_once 'SomeClass.php';

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testStub()
    {
        // Cria um esboço para a classe SomeClass.
        $stub = $this->getMockBuilder('SomeClass')
                     ->disableOriginalConstructor()
                     ->getMock();

        // Configura o esboço.
        $stub->method('doSomething')
             ->willReturn('foo');

        // Chamar $stub->doSomething() agora vai retornar
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }
}