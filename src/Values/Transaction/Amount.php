<?php

namespace Msng\GmoPaymentGateway\Values\Transaction;

use Msng\GmoPaymentGateway\Values\IntegerValue;

class Amount extends IntegerValue
{
    protected $maxLength = 7;
}