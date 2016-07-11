<?php

namespace Game\Map;

use Game\Map\Tile;
use Game\Resources\Resource;

class ResourceTile extends Tile {
    
    /*
        @var Game\Resources\Resource
     */
    protected $resource;

    /*
        @var integer
     */
    protected $generatedAmount;

    public function generate()
    {
        $this->resource->gain($this->generatedAmount);
    }
}