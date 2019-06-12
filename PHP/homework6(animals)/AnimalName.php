<?php
//Не используется для данной задачи

abstract class AnimalName
{
    protected $animal_name;
    
    public function setName($animal_name)
    {
        $this->animal_name = $animal_name;
    }

    public function getName()
    {
        return $this->animal_name;
    }
}