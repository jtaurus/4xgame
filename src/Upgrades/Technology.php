<?php

namespace Game\Upgrades;

use Game\Upgrades\Researchable;

class Technology {
    
    /*
        @var Game\Upgrades\Researchable;
     */
    protected $unlocks;

    function __construct(Researchable $technology)
    {
        $this->unlocks = $technology;
    }

    public function research()
    {
        $this->unlock($this->unlocks);
    }

    public function unlock(Researchable $technology)
    {
        $technology->research();
    }
}