<?php

namespace Game\Map;

use Game\Map\Tile;

class TileMap {

    protected $tiles;

    public function getTiles()
    {
        return $this->tiles;
    }

    public function setTiles($tiles)
    {
        $this->tiles = $tiles;
    }

    public function getTile($x, $y)
    {
        return $this->tiles[$x][$y];
    }

    public function setTile($x, $y, Tile $tile)
    {
        $tile->setPosition($x, $y);
        $this->tiles[$x][$y] = $tile;

        return $this;
    }

}