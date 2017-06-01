<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Configs\ValueMap;
use Msng\GmoPaymentGateway\Interfaces\EntityInterface;
use Msng\GmoPaymentGateway\Values\Value;

abstract class Entity implements EntityInterface
{
    protected $fields = [];

    /**
     * @var array|Value[]
     */
    private $values = [];

    public function __construct(array $params = [])
    {
        foreach ($this->fields as $field) {
            if (isset($params[$field])) {
                $this->set($field, $params[$field]);
            }
        }
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function set($key, $value)
    {
        $valueClass = ValueMap::$map[$key];
        $this->values[$key] = new $valueClass($value);

        return $this;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
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

        foreach ($this->values as $key => $value) {
            /** @var Value $value */
            $values[$key] = $value->getValue();
        }

        return $values;
    }

}