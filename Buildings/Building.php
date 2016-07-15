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


}