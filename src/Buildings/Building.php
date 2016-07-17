<?php

namespace Game\Buildings;

use Game\Engine\ActsOnTurn;
use Game\Map\Tile;
use Game\Buildings\GeneratedByBuildings;

class Building implements ActsOnTurn{
    
    /*
        Building name
     */
    protected $name = "Building";

    /*
        @var Game\Map\Tile
     */
    protected $tile;

    /*
        @var Game\Buildings\GeneratedByBuildings
     */
    protected $product;

    /*
        @var integer
     */
    protected $productAmount = 1;

    public function setTile(Tile $tile)
    {
        $this->tile = $tile;
    }

    public function processTurn()
    {
        $this->produce();
    }

    /*
        Generates $this->productAmount amount of product
     */
    public function produce()
    {
        $this->product->generateFromBuilding($this->productAmount);

        return $this;
    }

    /*
        @return Game\Buildings\Building
     */
    public static function build(Tile $tile)
    {
        $instance = new static;
        $instance->setTile($tile);

        return $instance;
    }


}