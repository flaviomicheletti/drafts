<?php

class Database
{
    protected $adapter;

    public function __construct(MySqlAdapter $adapter)
    {
        $this->adapter = $adapter;
    }
    
    function getAdapter()
    {
        return $this->adapter;
    }    
}

class MysqlAdapter {}