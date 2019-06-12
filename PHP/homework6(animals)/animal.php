<?php

require_once "Kitty.php";
require_once "Mouse.php";
require_once "Dog.php";
//require_once "AnimalName.php";

$cat = new Kitty('Tom');
//$cat->setName('Tom');
$mouse = new Mouse('Jerry');
//$mouse->setName('Jerry');
$dog = new Dog('Spike');
//$dog->setName('Spike');

echo "<br>";

$cat->move();
$cat->eat($mouse);
$cat->was_eaten($dog);

echo "<br>";

$mouse->move();
$mouse->was_eaten($cat);

echo "<br>";

$dog->move();
$dog->eat($cat);
$dog->eat($mouse);