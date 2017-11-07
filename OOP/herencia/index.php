<?php

//constructor y destructor

//namespace Vehicles;

include '../../views/up.html';

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

use Vehicles\{Car, Truck, ToyCar}; //apartir de php 7

//interfaces
//interface MyInterface {
//    public function method1();
//}

echo '<h1 style="text-align: center">Class Car</h1>';

echo 'Class Car <br>';
$car = new Car('Pablo');
$car->move();
//echo 'Propietario carro: ' . $car->getOwner() . '<br>';

try {
    echo 'Class ToyCar <br>';
    $toycar = new ToyCar('Pablo');
    $toycar->move();
} catch (Exception $e){
    echo 'Este es un juguete. <br><br>';
} finally { // el finally se ejecuta se use o no la exception
    echo 'Finally <br><br>';
}

echo '<br>Class Truck <br>';
$truck1 = new Truck('Axel', 'Pickup');
$truck1->move();
//echo 'Propietario de la camioneta: ' . $truck->getOwner();

echo '<br>Class Truck <br>';
$truck2 = new Truck('Max', 'Pickup');
$truck2->move();
echo '<br> Total Trucks: ' .Truck::getTotal() . '<br>';

$ser = serialize($car);

$newCar = unserialize($ser);

echo 'New Car Owner: ' . $newCar->getOwner(). '<br>';

include '../../views/down.html';