<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Entity;

abstract class Response extends Entity
{
    public function create($class)
    {
        return new $class($this->toArray());
    }
}