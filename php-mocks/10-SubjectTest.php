<?php

require_once 'SST.php';

class SubjectTest extends PHPUnit_Framework_TestCase
{
    public function testObserversAreUpdated()
    {
        // Cria uma falsificação para a classe Observer,
        // apenas falsificando o método update().
        $observer = $this->getMockBuilder('Observer')
                         ->setMethods(array('update'))
                         ->getMock();

        // Configura a expectativa para o método update()
        // para ser chamado apenas uma vez e com a string 'something'
        // como seu parâmetro. Retorna na função falsificada o valor success
        $observer->expects($this->once())
                 ->method('update')
                 ->with($this->equalTo('something'))
                 ->willReturn('success');

        // Cria um objeto Subject e anexa a ele o objeto
        // Observer falsificado.
        $subject = new Subject('My subject');
        
        // A função attach instância (anexa) o Mock object `$observer` criado 
        // acima ao invés de instanciar o objeto real
        $subject->attach($observer);

        // Chama o método doSomething() no objeto $subject
        // no qual esperamos chamar o método update()
        // do objeto falsificado Observer, com a string 'something'.
        // Esperamos o retorno da função falsificada
        $subject->doSomething();
    }
}
?>