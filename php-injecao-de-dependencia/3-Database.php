<?php

class Database
{
    protected $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    function getAdapter()
    {
        return $this->adapter;
    } 
}

interface AdapterInterface {}

class MysqlAdapter implements AdapterInterface {}