<?php

namespace Msng\GmoPaymentGateway\Values\Transaction;

use Msng\GmoPaymentGateway\Values\Value;

class Amount extends Value
{
    protected $type = self::TYPE_NUMBER;

    protected $maxLength = 7;
}