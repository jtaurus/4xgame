<?php

namespace Game\Resources;

class Resource {
    
    protected $name;
    public static $resourceBank;

    function __construct()
    {
        $this->createResourceBank();
    }

    protected function createResourceBank()
    {
        if(self::$resourceBank == null)
        {
            self::$resourceBank = new ResourceBank;
        }
    }

    public function getResourceBank()
    {
        return self::$resourceBank;
    }

    public function setResourceBank(ResourceBank $resourceBank)
    {
        self::$resourceBank = $resourceBank;
    }

    public function gain($amount)
    {
        return self::$resourceBank->increment($amount);
    }

    public function spend($amount)
    {
        return self::$resourceBank->decrement($amount);
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