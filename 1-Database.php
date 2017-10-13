<?php

class Database
{
    protected $adapter;

    public function __construct()
    {
        $this->adapter = new MySqlAdapter;
    }

    function getAdapter()
    {
        return $this->adapter;
    }
}

class MysqlAdapter {}