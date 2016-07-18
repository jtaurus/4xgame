<?php

namespace Game\Map;

use Game\Map\Tile;
use Game\Resources\Resource;
use Game\Engine\ActsOnTurn;

class ResourceTile extends Tile implements ActsOnTurn {
    
    /*
        @var Game\Resources\Resource
     */
    protected $resource;

    /*
        @var integer
     */
    protected $generatedAmount = 1;

    function __construct(Resource $resource)
    {
        $this->resource = $resource;
    }

    public function generate()
    {
        $this->resource->gain($this->generatedAmount);
    }

    public function processTurn()
    {
        $this->generate();
    }
}