<?php
require_once "Move.php";
require_once "WasEaten.php";
//require_once "AnimalName.php";

class Mouse /*extends AnimalName*/ implements Move,WasEaten
{
    private $animal_name;
    
    public function __construct($animal_name)
    {
        $this->animal_name = $animal_name;
        var_dump("Mouse will be called $this->animal_name");
    }

    public function getName()
    {
        return $this->animal_name;
    }

    public function move()
    {
        var_dump("$this->animal_name moves slowly");
    }

    public function was_eaten(Eat $animalName)
    {
        var_dump($this->animal_name." can be eaten by ".$animalName->getName());
    }


}