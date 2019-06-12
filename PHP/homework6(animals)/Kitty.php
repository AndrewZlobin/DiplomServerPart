<?php
require_once "Move.php";
require_once "Eat.php";
require_once "WasEaten.php";
//require_once "AnimalName.php";

class Kitty /*extends AnimalName*/ implements Move,Eat,WasEaten
{
    private $animal_name;
    public function __construct($animal_name)
    {
        $this->animal_name = $animal_name;
        var_dump("Cat will be called $this->animal_name");
    }

    public function getName()
    {
        return $this->animal_name;
    }

    public function move()
    {
        var_dump("$this->animal_name moves fast");
    }

    public function eat(WasEaten $animalName)
    {
        var_dump($this->animal_name." can eat ".$animalName->getName());
    }

    public function was_eaten(Eat $animalName)
    {
        var_dump($this->animal_name." can be eaten by ".$animalName->getName());
    }

}