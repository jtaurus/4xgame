<?php

namespace Game\Battle;

use Game\Units\FightingUnit;
use Game\Map\Tile;
use Game\Battle\Side;

class Battle {
    
    /*
        @var Game\Battle\Side
     */
    protected $side_a;

    /*
        @var Game\Battle\Side
     */
    protected $side_b;

    /*
        @var Game\Map\Tile;
     */
    protected $tile;

    public function __construct(Tile $tile, Side $side_a, Side $side_b)
    {
        $this->tile = $tile;
        $this->side_a = $side_a;
        $this->side_b = $side_b;
    }

    public function addSideAUnit(FightingUnit $unit)
    {
        $this->side_a->addUnit($unit);
    }

    public function addSideBUnit(FightingUnit $unit)
    {
        $this->side_b->addUnit($unit);
    }

    public function removeSideAUnit(FightingUnit $unit)
    {
        $this->side_a->removeUnit($unit);
    }

    public function removeSideBUnit(FightingUnit $unit)
    {
        $this->side_b->removeUnit($unit);
    }
}