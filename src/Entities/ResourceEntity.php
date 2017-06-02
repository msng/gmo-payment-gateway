<?php

namespace msng\GmoPaymentGateway\Entities;

abstract class ResourceEntity extends Entity
{
    public function __construct(array $params = [])
    {
        $this->fields = (new \ReflectionClass($this))->getConstants();

        parent::__construct($params);
    }
}