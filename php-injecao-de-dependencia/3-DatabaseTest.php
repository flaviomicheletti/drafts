<?php

require "3-Database.php";

class DataBaseTest extends PHPUnit_Framework_TestCase
{
    public function testFoo()
    {
        $obj = new Database(new MysqlAdapter);
        $this->assertInstanceOf("MysqlAdapter", $obj->getAdapter());
    }
}