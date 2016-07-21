<?php

namespace Game\Units;

use Game\Units\Attackable;

interface CanAttack {
    public function attack(Attackable $target);
}