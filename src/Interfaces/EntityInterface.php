<?php

namespace msng\GmoPaymentGateway\Interfaces;

interface EntityInterface
{
    /**
     * @param string $key
     * @param string|int|float $value
     * @return $this
     */
    public function set($key, $value);

    /**
     * @param $key
     * @return string|int|float
     */
    public function get($key);

    /**
     * @return array
     */
    public function toArray();
}
