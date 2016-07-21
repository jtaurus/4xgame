<?php

namespace Game\Units;

use Game\Units\CanAttack;

interface Attackable {
    public function getAttacked(CanAttack $attacker);
}