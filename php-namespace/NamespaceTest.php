<?php

require_once __DIR__ . '/autoload.php';

use \barbarian\Conan as Barbarian;
use \obrien\Conan as Obrien;

class NamespaceTest extends PHPUnit_Framework_TestCase {

    function testBarbarian() {
        $conan = new Barbarian();
        $this->assertEquals('extremely muscular born: before history', "$conan->bodyBuild born: $conan->birthDate");
    }

    function testObrien() {
        $conan = new Obrien();
        $this->assertEquals('very skinny born: 1963', "$conan->bodyBuild born: $conan->birthDate");
    }

}
