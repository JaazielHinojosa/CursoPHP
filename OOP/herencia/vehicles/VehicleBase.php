<?php

namespace Vehicles;

class VehicleBase
{
    protected $owner;

    //Un constructor siempre se va a ejecutar cuando se hace una instancia a una clase.
    public function __construct($owner)
    {
        $this->owner = $owner;
        echo 'constructor <br>';
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