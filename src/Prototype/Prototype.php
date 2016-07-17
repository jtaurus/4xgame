<?php

namespace Game\Prototype;

use Game\Engine\Engine;
use Game\Map\TileMap;
use Game\Map\TileMapGenerator;
use Game\Resources\Gold;

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
        @var [] Game\Units\Unit
     */
    public $units;

    function __construct()
    {
        $this->initEngine();
        $this->initTileMap();
        $this->initResources();
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
    }

    protected function initResources()
    {
        $this->resources[] = new Gold();
    }
}