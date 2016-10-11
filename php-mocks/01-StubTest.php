<?php

require_once 'SomeClass.php';

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testStub()
    {
        // Cria um esboço para a classe AlgumaClasse.
        $stub = $this->getMockBuilder('SomeClass')
                     ->getMock();

        // Configura o esboço.
        $stub->method('doSomething')
             ->willReturn('foo');

        // Chamando $esboco->fazAlgumaCoisa() agora vai retornar 
        // 'foo'.
        $this->assertEquals('foo', $stub->doSomething());
    }
}