<?php
require_once 'SomeClass.php';

function calc($val1, $val2) {
    return $val1 + $val2;
}

class StubTest extends PHPUnit_Framework_TestCase
{
    public function testReturnCallbackStub()
    {
        // Cria um esboço para a classe AlgumaClasse.
        $stub = $this->getMockBuilder('SomeClass')
                     ->getMock();

        // Configura o esboço.
        $stub->method('doSomething')
             ->will($this->returnCallback('calc'));

        // $stub->doSomething($argument) retorna calc($val1, $val2)
        $this->assertEquals(7, $stub->doSomething(2, 5));
    }
}