<?php

namespace Game\Engine;

use Game\Engine\ActsOnTurn;

class Engine {

    /*
        Array of entities changing with time ( on new turns )
     */
    protected $entities;

    public function addEntity(ActsOnTurn $entity)
    {
        $this->entities[] = $entity;

        return $this;
    }

    public function removeEntity(ActsOnTurn $entity)
    {
        $position = array_search($entity, $this->entities);

        if($position)
        {
            unset($this->entities[$position]);
            $this->entities = array_values($this->entities);
        }

        return $this;
    }

    /*
        Runs the end of the turn actions on all entities
     */
    public function endTurn()
    {
        for($i = 0;$i<count($this->entities); $i++)
        {
            $this->entities[$i]->processTurn();
        }

        return $this;
    }

}