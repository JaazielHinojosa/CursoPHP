<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase
{
    private static $count = 0;
    private $type;

    public function __construct($owner, $type)
    {
        $this->type = $type;
        $this->owner = $owner;
        self::$count++;
    }

    public function move(){
        echo 'Truck : Moviendo ' . $this->type . '<br>';
    }

    public static function getTotal(){
        return self::$count;
    }
}
