<?php
class Subject
{
    protected $observers = array();
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function doSomething()
    {
        // Faça algo.

        // ...

        // Notifica aos observadores que fizemos algo.
        return $this->notify('something');
    }

    public function doSomethingBad()
    {
        foreach ($this->observers as $observer) {
            var_dump($observer->reportError(42, 'Something bad happened', $this));
        }
        
        return $this->observers;
    }

    protected function notify($argument)
    {
        foreach ($this->observers as $observer) {
            var_dump($observer->update($argument));
        }
    }

    // Outros métodos.
}

class Observer
{
    public function update($argument)
    {
        // Faça algo.
    }

    public function reportError($errorCode, $errorMessage, Subject $subject)
    {
        // Faça algo.
    }

    // Outros métodos.
}