<?php

namespace Game\Units;

use Game\Map\Tile;
use Game\Units\CanMove;

class Unit {
    
    /*
        @var Game\Map\Tile
     */
    public $tile;

    /*
        @var String
     */
    public $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function occupy(Tile $tile)
    {
        $this->tile = $tile;
        $this->tile->addUnit($this);
        
        return $this;
    }

    public function tile()
    {
        return $this->tile;
    }

    public function move(Tile $tile)
    {
        // 
    }


}