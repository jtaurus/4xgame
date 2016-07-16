<?php

namespace Game\Resources;

class ResourceBank {
    /*
        @var Game\Resources\Resource;
     */
    protected $resource;

    /*
        @var integer
     */
    protected $amount;

    public function increment($amount)
    {
        $this->amount += $amount;

        return $this->amount;
    }

    public function decrement($amount)
    {
        if($amount <= $this->amount)
        {
            $this->amount -= $amount;
        }

        return false;
    }

    public function amount()
    {
        return $this->amount;
    }
}