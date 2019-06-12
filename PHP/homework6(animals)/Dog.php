<?php
require_once "Eat.php";
require_once "Move.php";

class Dog /*extends AnimalsName*/ implements Move,Eat
{
    private $animal_name;

    public function __construct($animal_name)
    {
        $this->animal_name = $animal_name;
        var_dump("Dog will be called $this->animal_name");
    }

    public function getName()
    {
        return $this->animal_name;
    }

    public function move()
    {
        var_dump("$this->animal_name moves normal");
    }

    public function eat(WasEaten $animalName)
    {
        var_dump($this->animal_name." can eat ".$animalName->getName());
    }
}