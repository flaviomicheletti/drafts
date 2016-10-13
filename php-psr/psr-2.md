## PSR-2: Guia do estilo de código

### Exemplo

    <?php
    namespace Vendor\Package;

    use FooInterface;
    use BarClass as Bar;
    use OtherVendor\OtherPackage\BazClass;

    class Foo extends Bar implements FooInterface
    {
        public function sampleFunction($a, $b = null)
        {
            if ($a === $b) {
                bar();
            } elseif ($a > $b) {
                $foo->bar($arg1);
            } else {
                BazClass::bar($arg2, $arg3);
            }
        }

        final public static function bar()
        {
            // method body
        }
    }



### Geral

+ Deve estar de acordo com a PSR-1;
+ Todos os arquivos PHP devem utilizar o padrão UNIX (LF) do termino da linha; 
+ Todos os arquivos PHP (exceto os que contém HTML) devem terminar com uma linha em branco;
+ A tag `?>` deve ser omitida se o arquivo for PHP puro.
+ Todas as linhas devem ter no máximo 120 caracteres (o ideal é 80 caracteres);
+ O verificador deve avisar quando o limite é ultrapassado, sem acusar como erro;
+ Se ultrapassar o limite a linha deve ser quebrada em multiplas linhas;
+ As linhas em branco não devem conter espaços em brancos;
+ Blocos de códigos podem ser separadas por uma linha em branco;
+ Não declare mais de uma variável ou função na mesma linha.
+ Utilize 4 espaços ao invés do TAB (configure o TAB para indentar 4 espaços);
+ Constantes true, false e null devem estar no estilo lower case.


### Namespace e declarações

+ Ao definir o namespace, deve haver uma linha em branco após defini-lo;
+ Declarações `use` devem estar depois do namespace;
+ Sempre que precisar declarar mais de uma Trait de `use`, declare em uma nova linha;
+ Após o bloco de `use` adicione um linha em branco;.


### Classes, propriedades e métodos

+ As keywords `extends` e `implements` devem ser declaradas na mesma linha da classe;
+ Uma lista de `implements` pode ser divididas em múltiplas linhas, cada linha deve conter apenas uma `interface`.


### Propriedades

+ Declarar sempre a visibilidade da propriedade (public, private ou protected);
+ A keyword `var` não deve ser utilizada para declarar uma propriedade;
+ Declarar as propriedades separadas por linha;
+ As propriedades não podem ser declaradas com underscore para indicar que a propriedade é private ou protected;
 

### Métodos

+ Declarar sempre a visibilidade do método (public, private ou protected);
+ Os métodos não podem ser declaradas com underscore para indicar que a propriedade é private ou protected;
+ A declaração devem seguir o estilo `public function meuMetodo($argumentoUm, $argumentoDois)`.


### Argumentos dos métodos 

+ A lista de argumentos devem seguir o estilo `($arg1, &$arg2, $arg3)`;
+ Argumentos com valor padrão devem ser o último a ser declarado;
+ Caso uma lista de argumentos seja muito grande, podem seguir o estilo:

    public function meuMetodo(
        $argumentoUm,
        $argumentoDois,
        $argumentoTres
    ) {
        /* corpo do método */
    }


### Abstract, final e static

+ Declarações `abstract` e `final` devem ser declaradas antes da visibilidade `abstract public function meuMetodo() {}`;
+ Declaração `static` deve ser declarada após a visibilidade `protected static $foo;`.


### Chamadas das funções

+ As chamadas dos métodos devem seguir o estilo:

    bar();
    $foo->bar($arg1);
    Foo::bar($arg2, $arg3);
    // Caso a lista de argumentos seja muito extensa para uma linha
    $foo->bar(
        $longArgument,
        $longerArgument,
        $muchLongerArgument
    );


### Estruturas de controle

+ Deve haver um espaço após a palavra-chave da estrutura de controle;
+ Não deve haver um espaço após o parêntese de abertura (quando aplicável);
+ Não deve haver um espaço antes do parêntese de fechamento (quando aplicável);
+ Deve haver um espaço entre o parêntese de fechamento e a chave de abertura (quando aplicável);
+ O corpo da estrutura de controle (quando aplicável) deve ser indentado uma vez;
+ A chave de fechamento (quando aplicável) deve ser colocada uma linha após do corpo da estrutura de controle.

Estilos da estrutura de controles:

__if, elseif, else__

    if ($expr1) {
        // if body
    } elseif ($expr2) {
        // elseif body
    } else {
        // else body;
    }

__switch, case__

    switch ($expr) {
        case 0:
            echo 'First case, with a break';
            break;
        case 1:
            echo 'Second case, which falls through';
            // no break
        case 2:
        case 3:
        case 4:
            echo 'Third case, return instead of break';
            return;
        default:
            echo 'Default case';
            break;
    }

__while, do while__

    while ($expr) {
        // structure body
    }

    do {
        // structure body;
    } while ($expr);

__for__

    for ($i = 0; $i < 10; $i++) {
        // for body
    }

__foreach__

    foreach ($iterable as $key => $value) {
        // foreach body
    }

__try, catch__

    try {
        // try body
    } catch (FirstExceptionType $e) {
        // catch body
    } catch (OtherExceptionType $e) {
        // catch body
    }


### Links

http://www.php-fig.org/psr/
https://davidlima.com.br/post/php-fig-e-as-psr-parte-1/
https://davidlima.com.br/post/php-fig-e-as-psr-parte-2/
http://www.fititnt.org/padrao/php-psr.html
http://pt.stackoverflow.com/questions/32295/o-que-significa-psr/32302#32302