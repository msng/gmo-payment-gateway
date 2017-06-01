<?php

namespace Msng\GmoPaymentGateway\Interfaces;

interface ValueInterface
{
    /**
     * @return mixed
     */
    public function getValue();

    /**
     * @param mixed $value
     */
    public function setValue($value);
}