<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Car extends VehicleBase implements \Serializable
{
    public function move(){
        echo $this->startEngine() . '<br>';
        echo 'Car: Moviendo coche <br>';
    }

    public function startEngine()
    {
        return 'Car: start engine';
    }

    //serealize y unserealize
    public function serialize()
    {
        echo 'Serialize<br>';
        return $this->owner;
    }

    public function unserialize($serialized)
    {
        echo 'Unserialize<br>';
        $this->owner = $serialized;
    }
}
