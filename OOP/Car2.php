<?php

//constructor y destructor
class Car
{
    private $owner;

    //Un constructor siempre se va a ejecutar cuando se hace una instancia a una clase.
    public function __construct($owner)
    {
        $this->owner = $owner;
    }

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

$car = new Car('Daniel');
$car2 = new Car('Axel');

$car->move();

echo 'Propietario carro 1: ' . $car->getOwner() . '<br>';
echo 'Propietario carro 2: ' . $car2->getOwner();

include '../views/down.html';