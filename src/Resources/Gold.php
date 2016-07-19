<?php

namespace Game\Resources;

use Game\Buildings\GeneratedByBuildings;
use Game\Resources\KeepsOneInstance;

class Gold extends Resource implements GeneratedByBuildings, KeepsOneInstance {
    protected $name = 'Gold';
    public static $instance = null;

    public function generateFromBuilding($amount)
    {
        $this->gain($amount);
    }

    public static function instance()
    {
        if(self::$instance == null)
        {
            self::$instance = new Gold;
        }

        return self::$instance;
    }
}