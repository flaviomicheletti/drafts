<?php

class Pessoa {

    function foo() {
        return true;
    }

    function foodie() {
        return $this->foo();
    }

    function foolie() {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    function ignoreFoo() {
        return true;
    }
}