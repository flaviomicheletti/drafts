<?php
require_once 'SomeClass.php';

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testOnConsecutiveCallsStub()
    {
        // Cria um esboço para a classe SomeClass.
        $stub = $this->getMockBuilder('SomeClass')
                     ->getMock();

        // Configura o esboço.
        $stub->method('doSomething')
             ->will($this->onConsecutiveCalls(2, 3, 5, 7));

        // $stub->doSomething() retorna um valor diferente em cada vez na forma consecutiva
        // Cada chamada da função retorna o próximo valor
        $this->assertEquals(2, $stub->doSomething());
        $this->assertEquals(3, $stub->doSomething());
        $this->assertNotEquals(6, $stub->doSomething()); // O retorno correto é o 5
        $this->assertEquals(7, $stub->doSomething());
    }
}