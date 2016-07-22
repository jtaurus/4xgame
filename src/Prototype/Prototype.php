<?php

namespace Game\Prototype;

use Game\Engine\Engine;
use Game\Map\TileMap;
use Game\Map\TileMapGenerator;
use Game\Resources\Gold;
use Game\Resources\Population;
use Game\Units\UnitManager;

class Prototype {
    
    /*
        @var Game\Engine\Engine
     */
    public $engine;

    /*
        @var Game\Map\TileMap;
     */
    public $tileMap;

    /*
        @var [] Game\Resources\Resource
     */
    public $resources;
    
    /*
        @var Game\Units\UnitManager
     */
    public $unitManager;

    function __construct()
    {
        $this->initEngine();
        $this->initTileMap();
        $this->initResources();
        $this->initUnitManager();
    }

    public function turn()
    {
        $this->engine->endTurn();

        return $this;
    }

    protected function initEngine()
    {
        $this->engine = new Engine();
    }

    protected function initTileMap()
    {
        $this->tileMap = TileMapGenerator::generate(16, 16);
        TileMapGenerator::registerResourceTiles($this->engine, $this->tileMap);
    }

    protected function initResources()
    {
        $this->resources[] = Gold::instance();
        $this->resources[] = Population::instance();
    }

    protected function initUnitManager()
    {
        $this->unitManager = new UnitManager($this->engine, $this->tileMap);
    }
}