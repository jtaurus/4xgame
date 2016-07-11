<?php

namespace Game\Map;

use Game\Map\PositionContract;

class Tile {

    /*
        @var String
     */
    protected $name;
    /*
        @var PositionContract
     */
    protected $position;

    /*
        @var array
     */
    protected $units;

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition(PositionContract $position)
    {
        $this->position = $position;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this->name;
    }

    public function addUnit(Unit $unit)
    {
        echo "Add unit";
    }

    public function removeUnit(Unit $unit)
    {
        echo "Remove unit";
    }

    public function getUnits()
    {
        return $this->units;
    }

}