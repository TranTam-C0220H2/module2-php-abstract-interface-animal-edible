<?php
include 'abstract/Animal.php';
include 'interface/Edible.php';
include 'class/Tiger.php';
include 'class/Chicken.php';
include 'abstract/Fruit.php';
include 'class/Apple.php';
include 'class/Orange.php';
$tiger = new Tiger();
$orange = new Orange();
$chicken = new Chicken();
$apple = new Apple();
echo $tiger->makeSound().'<br>';
echo $chicken->makeSound().' and '.$chicken->howToEat().'<br>';
echo 'Orange: '.$orange->howToEat().'<br>';
echo 'Apple: '.$apple->howToEat();

