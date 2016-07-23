<?php

namespace Game\Units;

use Game\Engine\Engine;
use Game\Map\TileMap;
use Game\Map\Tile;
use Game\Units\Unit;

/* 
    Handles spawning units
*/
class UnitManager {
    
    /*
        @var Game\Engine\Engine
     */
    public $engine;

    /*
        @var Game\Map\TileMap
     */
    public $tileMap;

    /*
        @var array - Array of units
     */
    public $units;

    function __construct(Engine $engine, TileMap $tileMap)
    {
        $this->engine = $engine;
        $this->tileMap = $tileMap;
    }

    public function spawnUnit(Tile $tile, Unit $unit)
    {
        $tile->addUnit($unit);
        $this->addUnit($unit);

        return $this;
    }

    public function addUnit(Unit $unit)
    {
        $this->units[] = $unit;

        return $this;
    }

    public function getUnits()
    {
        return $this->units;

        return $this;
    }
}