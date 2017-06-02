<?php

namespace msng\GmoPaymentGateway\Values;

abstract class EnumValue extends Value
{
    /**
     * @var array
     */
    private $identifiers;

    public function __construct($value = null)
    {
        $this->identifiers = (new \ReflectionObject($this))->getConstants();

        parent::__construct($value);
    }

    protected function validate($value)
    {
        if (!in_array($value, $this->identifiers, true)) {
            throw new \InvalidArgumentException(sprintf('Value of %s must be one of (%s); "%s" given.', __CLASS__, implode('|', $this->identifiers), $value));
        }
    }
}