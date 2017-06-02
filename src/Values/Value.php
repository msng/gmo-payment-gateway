<?php

namespace msng\GmoPaymentGateway\Values;

use msng\GmoPaymentGateway\Interfaces\ValueInterface;

abstract class Value implements ValueInterface
{
    /**
     * @var mixed Stores the value
     */
    protected $value;

    /**
     * @var int|null
     */
    protected $maxLength;

    /**
     * @var bool
     */
    protected $isMultiByte = false;

    /**
     * @var string The encoding that multi-byte value should be encoded to.
     */
    protected $toEncoding = 'SJIS';

    /**
     * @var bool When true, the value is cut to the length of $maxLength.
     */
    protected $trimLength = false;

    public function __construct($value = null)
    {
        if (!is_null($value)) {
            $this->setValue($value);
        }
    }

    /**
     * Get the value as is
     *
     * @return mixed
     */
    public function getOriginalValue()
    {
        return $this->value;
    }

    /**
     * Get the value and trim it for the API
     *
     * @return mixed
     */
    public function getValue()
    {
        $value = $this->value;

        if ($this->isMultiByte) {
            $value = mb_convert_encoding($value, $this->toEncoding);
        }

        if ($this->trimLength) {
            $encoding = $this->isMultiByte ? $this->toEncoding : mb_internal_encoding();

            $value = mb_strcut($value, 0, $this->maxLength, $encoding);
        }

        return $value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->validate($value);

        $this->value = $value;
    }

    /**
     * @param mixed $value
     */
    protected function validate($value)
    {
        //When $cutIfLong is true, the value is cut when sent to the API.
        if ($this->lengthValidationRequired() && (strlen($value) > $this->maxLength)) {
            throw new \LengthException(sprintf('Length of %s must be %d or less.', __CLASS__, $this->maxLength));
        }
    }

    /**
     * @return bool
     */
    protected function lengthValidationRequired()
    {
        if ($this->trimLength) {
            return false;
        } elseif (is_null($this->maxLength)) {
            return false;
        } elseif ($this->isEnum()) {
            return false;
        }

        return true;
    }

    /**
     * @return bool
     */
    private function isEnum()
    {
        if (empty($this->enum)) {
            return false;
        } else {
            return true;
        }
    }

}
