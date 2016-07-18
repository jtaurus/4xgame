<?php

namespace Game\Map;

use Game\Map\Tile;
use Game\Map\TileMap;
use Game\Map\ResourceTile;
use Game\Resources\Gold;
use Game\Resources\Population;
use Game\Engine\Engine;
use Game\Engine\ActsOnTurn;

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

    public static function registerResourceTiles(Engine $engine, TileMap $tileMap)
    {

        $tiles = $tileMap->getTiles();

        for($x = 0; $x<count($tiles); $x++)
        {
            $row = $tiles[$x];
            for($y = 0; $y<count($row); $y++)
            {
                if($row[$y] instanceof ActsOnTurn)
                {
                    $engine->addEntity($row[$y]);
                }
            }
        }
    }

    /**
     * Generates a random tile
     * @return Game\Map\Tile [description]
     */
    public static function generateRandomTile()
    {
        $random = rand(0,10);

        if($random < 1)
        {
            $resource = new Gold;
            return new ResourceTile($resource);
        }
        if($random > 1 && $random < 4)
        {
            $resource = new Population;
            return new ResourceTile($resource);
        }

        return new Tile;
    }
}