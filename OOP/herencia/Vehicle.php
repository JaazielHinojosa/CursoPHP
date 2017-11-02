<?php

//constructor y destructor
class Vehicle
{
    protected $owner;

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

class Car extends Vehicle
{
    public function move(){
        echo 'Car: Moviendo coche <br>';
    }
}

class Truck extends Vehicle
{
    private $type;

    public function __construct($owner, $type)
    {
        $this->type = $type;
        $this->owner = $owner;
//        parent::__construct($owner);
    }

    public function move(){
        echo 'Truck : Moviendo ' . $this->type . '<br>';
    }
}

include '../../views/up.html';

echo '<h1 style="text-align: center">Class Car</h1>';

echo 'Class Car <br>';
$car = new Car('Pablo');
$car->move();
echo 'Propietario carro: ' . $car->getOwner() . '<br>';

echo '<br>Class Truck <br>';
$truck = new Truck('Axel', 'Pickup');
$truck->move();
echo 'Propietario de la camioneta: ' . $truck->getOwner();


include '../../views/down.html';