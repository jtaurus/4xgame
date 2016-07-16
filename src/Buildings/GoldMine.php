<?php

namespace Game\Buildings;

use Game\Resources\Gold;

class GoldMine extends Building {
    
    protected $name = 'Gold mine';

    function __construct()
    {
        $this->product = new Gold();
    }
}