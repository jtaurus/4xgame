<?php

namespace Game\Map;

use Game\Map\Tile;
use Game\Map\TileMap;
use Game\Map\ResourceTile;

class TileMapGenerator {
    
    /**
     * Generate a TileMap object
     * @param  integer $x Map width
     * @param  integer $y Map height
     * @return Game\Map\TileMap    The map
     */
    public static function generate($x, $y)
    {
        $tileMap = new TileMap;

        for($a = 0; $a < $x; $a++)
        {
            for($b = 0; $b < $y; $b++)
            {
                $tile = TileMapGenerator::generateRandomTile();
                $tileMap->setTile($a, $b, $tile);
            }
        }

        return $tileMap;
    }

    /**
     * Generates a random tile
     * @return Game\Map\Tile [description]
     */
    public static function generateRandomTile()
    {
        return new Tile;
    }
}