<?php

///////////////////////// Abstraction ///////////////////
class Abstraction {

    /**
     * var Implmentation
     */
    protected $implementation;

    public function __construct(Implementation $implementation){
        $this->implementation=$implementation;
    }

    public function operation (): string{
        return "Abstraction Base Implementation ".$this->implementation->operateImplementation();
    }
}

class ExtendedAbstraction extends Abstraction {

    public function operation (): string{
        return "ExtendedAbstraction Implementation ".$this->implementation->operateImplementation();
    }

}

///////////////////////// Implementation ///////////////////
Interface Implementation{
    public function operateImplementation();

}

class ConcreteImplementationA implements Implementation{
    public function operateImplementation(){
        return "ConcreteImplementationA : Result of operation on platform A";
    }
}

class ConcreteImplementationB implements Implementation{
    public function operateImplementation(){
        return "ConcreteImplementationB : Result of operation on platform B";
    }
}

///////////////////////////// ClientCode /////////////////////////

function clientCode(Abstraction $abstraction){
    echo $abstraction->operation();
}
$implementation = new ConcreteImplementationA();
$abstraction = new Abstraction($implementation);
clientCode($abstraction);

echo "\n";

$implementation = new ConcreteImplementationB();
$abstraction = new Abstraction($implementation);
clientCode($abstraction);