<?php

namespace Game\Battle;

use Game\Units\FightingUnit;


class Side {

    /*
        @var array of Game\Units\FightingUnit
     */
    protected $units;
    
    public function addUnit(FightingUnit $unit)
    {
        $this->units[] = $unit;

        return $this;
    }

    public function removeUnit(FightingUnit $unit)
    {
        $position = array_search($unit, $this->units);

        if($position)
        {
            unset($this->units[$position]);
            $this->units = array_values($this->units);
        }

        return $this;
    }

    /*
        Returns the total attack of this side units

        @return integer - Total attack
     */
    public function getAttack()
    {
        $attack = 0;

        for($i = 0;$i<count($this->units);$i++)
        {
            $attack += $this->units[$i]->getAttack();
        }

        return $attack;
    }

    /*
        Returns the total hp of this side units

        @return integer - Total hp
     */
    public function getHP()
    {
        $hp = 0;

        for($i = 0;$i<count($this->units);$i++)
        {
            $hp += $this->units[$i]->getHP();
        }

        return $hp;
    }
}