# PHP Mocks: Dubles de testes

Os objetos Mocks são utilizados nos testes do PHPUnit com o objetivo de simular os objetos reais, 
ao criar dubles que retornam um valor especifico ou realizem uma determinada ação.

Podemos definir quais serão as funções que serão simuladas nos testes, desde que a mesma existe no 
escopo do objeto, e quais os resultados que deverão retornar cada uma destas funções. 

Alguns exemplos da onde podemos utilizar os Mocks objects:

+ funções que geram resultados variáveis, como por exemplo o tempo;
+ funções com estados difíceis de serem criados ou reproduzidos;
+ funções lentas como banco de dados que precisam ser inicializados antes do teste;
+ funções que ainda não existem ou podem ter comportamentos alterados;
+ funções que necessitem de informações e métodos adicionais exclusivos para os testes;



## Criando um Mock object

Ao criar um Mock object os parâmetros requeridos nas funções ainda são necessários, apenas o seu retorno 
que será sempre `Null` caso não definirmos o valor padrão. 

O exemplo abaixo é um trecho do `01-StubTest.php` que mostra como criar um Mock Object e de como simular 
o retorno de uma função.

    // Cria um esboço para a classe AlgumaClasse.
    $stub = $this->getMockBuilder('SomeClass')
                 ->getMock();

    // Configura o esboço.
    $stub->method('doSomething')
         ->willReturn('foo');



## Mock object e a injeção de dependência

Um Mock object pode ser adicionado ao invés de instanciar o objeto real para a execução dos testes que 
utilizam a `injeção de dependência`.

Por exemplo, temos uma classe que recebe 1 objeto pelo construtor, este objeto ainda não foi implementado, 
mas sabemos quais serão as suas funções e o que cada função irá retornar.

Para testarmos a classe que estamos desenvolvendo criamos um Mock object que simula o objeto real e o 
adicionamos no construtor ao invés do objeto real.

    // Cria um esboço para a classe AlgumaClasse.
    $ClasseStub = $this->getMockBuilder('SomeClass')
                  ->getMock();

    // E adicionamos o Mock object no lugar do objeto real.
    $classe = new Classe($ClasseStub); 

Assim sempre que houver uma chamada de alguma função da classe real será substituída pelo retorno da 
função do Mock object. Nos exemplos 10 e 11 utilizamos o método setter do injeção de dependência.



## Links

https://phpunit.de/manual/current/pt_br/test-doubles.html
https://code.tutsplus.com/pt/tutorials/all-about-mocking-with-phpunit--net-27252
https://jtreminio.com/2013/03/unit-testing-tutorial-part-4-mock-objects-stub-methods-dependency-injection/
http://php-and-symfony.matthiasnoback.nl/2014/07/test-doubles/
http://imasters.com.br/artigo/15259/php/mock-objects-no-simpletest/?trace=1519021197&source=single
http://www.devmedia.com.br/mocks-introducao-a-automatizacao-de-testes-com-mock-object/30641