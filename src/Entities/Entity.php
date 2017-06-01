<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Interfaces\EntityInterface;

abstract class Entity implements EntityInterface
{
    protected $valueMap = [];

    private $values = [];

    public function __construct(array $params = [])
    {
        foreach ($this->valueMap as $valueKey => $valueClass) {
            if (isset($params[$valueKey])) {
                $this->set($valueKey, $params[$valueKey]);
            }
        }
    }

    /**
     * @param string $key
     * @param string|int $value
     * @return $this
     */
    public function set($key, $value)
    {
        $this->validateKey($key);

        $valueClass = $this->valueMap[$key];
        $this->values[$key] = new $valueClass($value);

        return $this;
    }

    /**
     * @param $key
     * @return string|int|float|null
     */
    public function get($key)
    {
        $this->validateKey($key);

        if (isset($this->values[$key])) {
            return $this->values[$key]->getValue();
        } else {
            return null;
        }
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $values = [];

        foreach (array_keys($this->valueMap) as $valueKey) {
            if (isset($this->values[$valueKey])) {
                $values[$valueKey] = $this->values[$valueKey]->getValue();
            } else {
                $values[$valueKey] = null;
            }
        }

        return $values;
    }

    /**
     * @param string $key
     */
    private function validateKey($key)
    {
        if (!array_key_exists($key, $this->valueMap)) {
            throw new \OutOfBoundsException();
        }
    }

}