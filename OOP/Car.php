<?php

class Car
{
    private $owner;

    public function move(){
        echo 'Moviendo coche <br>';
    }

    public function getOwner(){
        return $this->owner;
    }

    public function setOwner($owner){
        $this->owner = $owner;
    }
}


include '../views/up.html';

echo '<h1 style="text-align: center">Class Car</h1>';

$car = new Car();
$car2 = new Car();

$car->move();
$car->setOwner('Daniel');
$car2->setOwner('Juan');

echo 'Propietario carro 1: ' . $car->getOwner() . '<br>';
echo 'Propietario carro 2: ' . $car2->getOwner();

include '../views/down.html';