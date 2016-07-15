<?php

use Game\Units\CanAttack;

interface Attackable {
    public function getAttacked(CanAttack $attacker);
}