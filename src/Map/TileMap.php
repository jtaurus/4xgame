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
        if($this->getTileIndex($x, $y))
        {
           return $this->tiles[$this->getTileIndex($x, $y)]; 
        }
        
        return false;
    }

    public function setTile($x, $y, Tile $tile)
    {
        if($this->getTileIndex($x, $y))
        {
            $this->tiles[$this->getTileIndex($x, $y)] = $tile;
        }
        return false;
    }

    public function getTileIndex($x, $y)
    {
          for(var $i = 0;$i<count($this->tiles);$i++)
        {
            if($this->tiles[$i]->x == $x && $this->tiles[$i]->y == $y)
            {
                return $i;
            }
        }
        
        return false;      
    }
}