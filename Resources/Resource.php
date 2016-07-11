<?php

namespace Game\Resources;

class Resource {
    
    protected $name;
    protected $resourceBank;

    public function getResourceBank()
    {
        return $this->resourceBank;
    }

    public function setResourceBank(ResourceBank $resourceBank)
    {
        $this->resourceBank = $resourceBank;
    }

    public function gain($amount)
    {
        return $this->resourceBank->increment($amount);
    }

    public function spend($amount)
    {
        return $this->resourceBank->decrement($amount);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this->name;
    }
}