<?php

namespace Game\Units;

use Game\Units\Unit;
use Game\Units\Attackable;
use Game\Units\CanAttack;

class FightingUnit extends Unit implements Attackable, CanAttack{
    
    /*
        @var integer
     */
    public $attack;

    /*
        @var integer
     */
    public $hp;

    public function getAttack()
    {
        return $this->attack;
    }

    public function getHP()
    {
        return $this->hp;
    }

    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    public function setHP($hp)
    {
        $this->hp = $hp;
    }

    public function attack(Attackable $target)
    {
        echo 'attack';
    }

    public function getAttacked(CanAttack $attacker)
    {
        //
    }
}