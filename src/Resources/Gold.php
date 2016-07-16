<?php

namespace Game\Resources;

use Game\Buildings\GeneratedByBuildings;

class Gold extends Resource implements GeneratedByBuildings {
    protected $name = 'Gold';

    public function generateFromBuilding($amount)
    {
        $this->gain($amount);
    }
}