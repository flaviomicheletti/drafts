<?php

// Aqui definimos as classe que serão injetadas, no link abaixo estão outras
// configurações que podem ser utilizadas.
// http://php-di.org/doc/php-definitions.html

// imports
use function DI\object;

return array(
    'MysqlAdapter' => object(),
    'MysqlConnection' => object()
);
