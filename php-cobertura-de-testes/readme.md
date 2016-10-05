# Code Coverage: Cobertura de testes

## Instalação do PHPUnit e Code Coverage

O Code Coverage é instalado com o PHPUnit podemos instalar via...

__Local__: apt-get install phpunit

__Composer__: composer.phar require phpunit/phpunit


## Instalação do xDebug

Após a instalação do PHPUNit será preciso instalar o xDebug que seja compartível 
a versão do PHP instalada no servidor, para isso acesso o link abaixo e cole o 
conteúdo da página do PHP Info.

    https://xdebug.org/wizard.php

Depois fazer o download do arquivo, instale o xDebug pelo terminal digitando os
seguintes comandos...

    $ tar -xvzf xdebug-2.4.1.tgz
    $ cd xdebug-2.4.1
    $ phpize
    $ ./configure
    $ make
    $ sudo cp modules/xdebug.so /usr/lib/php5/2013126
    $ sudo chmod 755 /usr/lib/php5/2013126/xdebug.so
    $ sudo service apache2 restart


Após a instalação do Xdebug adicione a linha...

    zend_extension= /usr/lib/php5/versao/xdebug.so

Nos arquivos php.ini lsiatados abaixo:

    /etc/php5/cli/php.ini     # configurações do php para o terminal
    /etc/php5/apache2/php.ini # configurações do php para o navegador


Para verificar se o Xdebug está ativo execute o comando `php -v`. Deverá aparecer a linha do Xdebug no resultado:

    PHP 5.6.11-1ubuntu3.4 (cli) 
    Copyright (c) 1997-2015 The PHP Group
    Zend Engine v2.6.0, Copyright (c) 1998-2015 Zend Technologies
        with Xdebug v2.4.1, Copyright (c) 2002-2016, by Derick Rethans
        with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2015, by Zend Technologies


## Executando testes com cobertura de testes

Para gerar um relatório que demonstra se os testes estão cobrindo todas as funções 
execute um dos comando abaixo:

html:   phpunit tests --coverage-html resultado/html/
xml:    phpunit tests --coverage-xml resultado/xml/

php:    phpunit tests --coverage-php resultado/em.php
crap4j: phpunit tests --coverage-crap4j resultado/em.xml

O último parâmetro é o local que os resultados serão armazenados.


## Links:

Comandos:           https://phpunit.de/manual/current/pt_br/textui.html
Documentação:       https://phpunit.de/manual/current/pt_br/code-coverage-analysis.html
Filtro de arquivos: https://phpunit.de/manual/current/pt_br/appendixes.configuration.html#appendixes.configuration.blacklist-whitelist