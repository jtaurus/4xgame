<?php

use Game\Map\Tile;

interface CanMove{
    
    public function move(Tile $tile);
}