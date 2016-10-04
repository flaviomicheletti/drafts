<?php

require "4-Database.php";

class DataBaseTest extends PHPUnit_Framework_TestCase
{
    public function testFoo()
    {
        $obj = new Database();
        $obj->setAdapter(new MysqlAdapter);
        $this->assertInstanceOf("MysqlAdapter", $obj->getAdapter());
    }
}