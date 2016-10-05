<?php

// Exemplo do containers de dependência com o PHP-DI com um arquivo de configuração (php-di/config.php)
// http://php-di.org/doc/getting-started.html
// http://www.douglaspasqua.com/2015/04/20/injecao-de-dependencia-com-php-di/

class Database
{
    protected $adapter;
    protected $connection;

    public function __construct(Di\ContainerBuilder $builder)
    {
        // Define as instancias das classes
        $builder->addDefinitions(__DIR__ . '/php-di/config.php');

        // Cria o container com o PHP-DI
        $container = $builder->build();

        // Exemplo de como solicitamos a classe na propriedade
        $this->adapter = $container->get('MysqlAdapter');
        $this->connection = $container->get('MysqlConnection');
    }

    function getAdapter()
    {
        return $this->adapter;
    }

    function getConnection()
    {
        return $this->connection;
    }
}

class MysqlAdapter {}

class MysqlConnection {}

