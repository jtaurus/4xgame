<?php

namespace Game\Map;

interface PositionContract {
    public function getX();
    public function getY();
    public function setX();
    public function setY();
}