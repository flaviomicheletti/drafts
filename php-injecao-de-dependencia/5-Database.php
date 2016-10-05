<?php

// Exemplo do containers de dependência com o PHP-DI no modo Autowiring
// http://php-di.org/doc/getting-started.html
// http://www.douglaspasqua.com/2015/04/20/injecao-de-dependencia-com-php-di/

require "php-di/vendor/autoload.php";
use DI\ContainerBuilder;

class Database
{
    protected $adapter;
    protected $container;

    public function __construct(\MysqlAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    function getAdapter()
    {
        return $this->adapter;
    }

    function getContainer()
    {
        // Inicializa o container do PHP-DI
        $builder = new ContainerBuilder();

        // Cria o container com o PHP-DI
        $container = $builder->build();

        return $this->container = $container->get('MysqlAdapter');
    }
}

class MysqlAdapter {}

