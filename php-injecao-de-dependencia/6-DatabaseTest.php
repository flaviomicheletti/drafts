<?php

require "6-Database.php";

require "php-di/vendor/autoload.php";
use DI\ContainerBuilder;

class DataBaseTest extends PHPUnit_Framework_TestCase
{
    public function testFoo()
    {
        $obj = new Database(new ContainerBuilder);
        $this->assertInstanceOf("MysqlAdapter", $obj->getAdapter());
        $this->assertInstanceOf("MysqlConnection", $obj->getConnection());
    }
}