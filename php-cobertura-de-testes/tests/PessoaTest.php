<?php

require_once __DIR__ . '/../pessoa/Pessoa.php';

class PessoaTest extends PHPUnit_Framework_TestCase {

//    public function testFoo() {
//        $pessoa = new Pessoa();
//        $this->assertTrue($pessoa->foo());
//    }

    /**
     * @covers Pessoa::foo
     * @covers Pessoa::foodie
     */
    public function testFoodie() {
        $pessoa = new Pessoa();
        $this->assertTrue($pessoa->foodie());
    }

    /**
     * @covers Pessoa::foolie
     */
    public function testFoolie() {
        $pessoa = new Pessoa();
        $this->assertFalse($pessoa->foolie());
    }

}
