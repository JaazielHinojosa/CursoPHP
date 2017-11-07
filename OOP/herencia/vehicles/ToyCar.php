<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class ToyCar extends VehicleBase
{
    public function move(){
        echo $this->startEngine() . '<br>';
        echo 'ToyCar: Moviendo coche <br>';
    }

    public function startEngine()
    {
        throw new \Exception('Motor no encontrado.');
    }
}
