<?php

namespace Game\Map;

use Game\Units\Unit;

class Tile {

    /*
        @var String
     */
    protected $name;

    /*
        @var integer - X position
     */
    protected $x;

    /*
        @var integer - Y position
     */
    protected $y;

    /*
        @var array
     */
    protected $units = [];

    public function x()
    {
        return $this->x;
    }

    public function y()
    {
        return $this->y;
    }

    public function setPosition($x, $y)
    {
        $this->x = $x;
        $this->y = $y;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function addUnit(Unit $unit)
    {
        $this->units[] = $unit;
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