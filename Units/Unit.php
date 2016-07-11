<?php

namespace Game\Units;

use Game\Map\Tile;

class Unit {
    
    /*
        @var Game\Map\Tile
     */
    protected $tile;

    /*
        @var String
     */
    protected $name;

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
        return $this->tile;
    }

    public function tile()
    {
        return $this->tile;
    }


}