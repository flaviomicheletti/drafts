<?php

require "5-Database.php";

class DataBaseTest extends PHPUnit_Framework_TestCase
{
    public function testFoo()
    {
        $obj = new Database(new MysqlAdapter);
        $this->assertInstanceOf("MysqlAdapter", $obj->getAdapter());
        $this->assertInstanceOf("MysqlAdapter", $obj->getContainer());
    }
}