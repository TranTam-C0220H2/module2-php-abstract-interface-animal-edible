<?php


class Chicken extends Animal implements Edible
{

    public function makeSound()
    {
        return 'Chicken: chick...chick!';
    }

    function howToEat()
    {
        return 'could be fried';
    }
}