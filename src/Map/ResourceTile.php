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

    function __construct(Resource $resource)
    {
        $this->resource = $resource;
    }

    public function generate()
    {
        $this->resource->gain($this->generatedAmount);
    }
}