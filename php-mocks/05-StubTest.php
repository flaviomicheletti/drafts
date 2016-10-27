<?php
require_once 'SomeClass.php';

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testReturnValueMapStub()
    {
        // Cria um esboço para a classe SomeClass.
        $stub = $this->getMockBuilder('SomeClass')
                     ->getMock();

        // Cria um mapa de argumentos para valores retornados.
        $map = array(
          array('a', 'b', 'c', 'd', 't'),
          array('e', 'f', 'g', 'h')
        );

        // Configura o esboço.
        $stub->method('doSomething')
             ->will($this->returnValueMap($map));

        // $stub->doSomething() retorna diferentes valores dependendo do 
        // argumento fornecido.
        $this->assertEquals('t', $stub->doSomething('a', 'b', 'c', 'd'));
        $this->assertEquals('h', $stub->doSomething('e', 'f', 'g'));
    }
}