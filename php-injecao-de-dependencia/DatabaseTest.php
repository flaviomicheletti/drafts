<?php

require "Database.php";

class DataBaseTest extends PHPUnit_Framework_TestCase
{
    public function testFoo()
    {
        $obj = new Database();
        $this->assertInstanceOf("MysqlAdapter", $obj->getAdapter());
    }
}