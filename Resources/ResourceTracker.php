<?php

namespace Game\Resources;

use Game\Resources\Resource;
use Game\Resources\ResourceBank;

class ResourceTracker {
    
    protected $resourceBanks;

    public function getResourceBanks()
    {
        return $this->resourceBanks;
    }

    public function addResourceBank(ResourceBank $resourceBank)
    {
        $this->resourceBanks[] = $resourceBank;
    }

    public function getResourceAmount(Resource $resource)
    {
        if($this->getResourceBankId($resource))
        {
            return $this->resourceBanks[$this->getResourceBankId($resource)]
        }

        return false;
    }

    protected function getResourceBankId(Resource $resource)
    {
        for($i = 0;$i<count($resourceBanks); $i++)
        {
            if($resourceBanks[$i]->getName() == $resource->getName())
            {
                return $i;
            }
        }

        return false;
    }

}