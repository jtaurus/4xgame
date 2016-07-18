<?php

namespace Game\Resources;

use Game\Buildings\GeneratedByBuildings;

class Population extends Resource implements GeneratedByBuildings{

    protected $name = 'Population';
    
    public function generateFromBuilding($amount)
    {
        $this->gain($amount);
    }
}