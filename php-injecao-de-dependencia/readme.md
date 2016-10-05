# Injeção de dependência

Trata-se de um design pattern que consiste na forma que uma classe é passada para 
a outra classe que irá consumir seus recursos (funções da classe).

Por exemplo, em uma classe de controle (camada de alto nível) temos a dependência de 
 um objeto (regras de negócio) e que por sua vez depende do modelo para carregar seus dados.
Neste exemplo, para visualizar o conteúdo da página uma pagina o controle depende de outras 
2 classes (regra de negócio e banco de dados).

Dependendo da forma que se instância as classes dependentes, pode gerar testes difíceis de 
serem realizadas com sucesso ou módulos que são fortemente acoplados e difíceis de se reutilizar.

Para evitar esses problemas, podemos trabalhar com a injeção de dependência de três formas:

+ injeção por construtor (constructor injection)
    + as dependências são inserida diretamente no método construtor
    + uma vez adicionada não é possível altera-lá
 
+ injeção por propriedade (setter injection)
    + as dependências são inseridas via função set em alguma propriedade da classe
    + maior flexibilidade ao instanciar as classes na propriedade 

+ injeção por interface (interface injection)
    + as dependências são inseridas através de uma instância da abstração
    + a interface pode ser substituído facilmente por uma nova 

+ containers de dependência (container injection)
    + não é muito recomendado utilizar por ser uma implementação anti-pattern (service location)
    + frameworks, como o Symphony, já possuem um container de dependência embutido
    + responsável por instanciar os objetos e gerenciar as dependências através de um arquivo de configuração


## Requisitos mínimos para executar os testes 5 e 6...

Os exemplo 5 e 6 utilizam o container de dependência do módulo PHP-DI, para instalar o módulo execute 
os comando abaixo:

    $ cd php-di
    $ composer install


## Links

http://br.phptherightway.com/#dependency_injection
http://www.douglaspasqua.com/2015/04/20/injecao-de-dependencia-com-php-di/
http://symfony.com/doc/current/components/dependency_injection.html
http://imasters.com.br/artigo/20079/desenvolvimento/injecao-de-dependencia-desacoplando-sua-aplicacao?trace=1519021197&source=single
http://www.macoratti.net/11/07/ioc_di1.htm
http://www.devmedia.com.br/design-patterns-injecao-de-dependencia-com-c/23671
http://martinfowler.com/articles/injection.html
http://www.devmedia.com.br/padrao-de-injecao-de-dependencia/18506
