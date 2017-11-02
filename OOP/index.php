<?php

class Car
{
    //propiedades son lo mismo que las variables
    public $owner;

    //metodos son lo mismo que las funciones
    public function move(){
        echo 'Moviendo coche <br>';
    }
}


include '../views/up.html';

echo '<h1 style="text-align: center">Class Car</h1>';

//Con esto creamos una instancia de la clase
//y podemos llamar sus métodos y sus atributos

//método
$car = new Car();
$car->move();

//atributo
$car->owner = 'Alex';
echo 'Propietario: ' . $car->owner;

include '../views/down.html';