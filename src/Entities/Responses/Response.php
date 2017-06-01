<?php

namespace Msng\GmoPaymentGateway\Entities\Responses;

use Msng\GmoPaymentGateway\Entities\Entity;

abstract class Response extends Entity
{
    public function create($class)
    {
        return new $class($this->toArray());
    }
}