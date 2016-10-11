# PHP Namespace

Para que dois objetos com o mesmo nome de locais diferentes se coexistem na mesma classe,
é preciso definir um namespace no começo de cada arquivo, assim evitamos o conflitos por
conta dos objetos possuírem o mesmo nome.

Por exemplo:

    <?php

        namespace barbarian;

        class Conan {}


Podemos referenciar as classes com o namespace de 3 formas

__Prefixando o nome de classe com o namespace__

    require_once "barbarian/Conan.php";
    $conan = new \barbarian\Conan();

__Importando o namespace__

    require_once "barbarian/Conan.php";
    use barbarian\Conan;
    $conan = new Conan();

__Com o alias do namespace__

    require_once "barbarian/Conan.php";
    use \barbarian\Conan as Cimmerian;
    $conan = new Cimmerian();


A instrução `require_once` pode ser eliminada ao utilizarmos o método `__autoload` do PHP,
esse método permite carregar todas as classes que ainda não foram incluídas no arquivo. No
código abaixo está um exemplo da função __autoload(), adicione no arquivo `autoload.php`.

    <?php

    function __autoload($classname) {
        $classname = ltrim($classname, '\\');
        $filename = '';
        $namespace = '';
        if ($lastnspos = strripos($classname, '\\')) {
            $namespace = substr($classname, 0, $lastnspos);
            $classname = substr($classname, $lastnspos + 1);
            $filename = str_replace('\\', '/', $namespace) . '/';
        }
        $filename .= str_replace('_', '/', $classname) . '.php';
        require_once $filename;
    }

Para carregar as classe utilize da seguinte forma:

    require_once "autoload.php";
    use \barbarian\Conan as Cimmerian;


## Links

http://br.phptherightway.com/#namespaces
https://www.ibm.com/developerworks/br/library/os-php-5.3namespaces/
http://www.diogomatheus.com.br/blog/php/entendendo-namespaces-no-php/
http://php.net/manual/pt_BR/language.namespaces.rationale.php
http://pt.stackoverflow.com/questions/40051/como-usar-namespace-numa-classe