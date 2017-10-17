<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Entity;

abstract class Response extends Entity
{
    protected $isError = false;

    public function create($class)
    {
        return new $class($this->toArray());
    }

    /**
     * @return bool
     */
    public function isError()
    {
        return $this->isError;
    }
}