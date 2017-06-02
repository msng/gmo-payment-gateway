<?php

namespace msng\GmoPaymentGateway\Values\Transaction;

use msng\GmoPaymentGateway\Values\IntegerValue;

class Amount extends IntegerValue
{
    protected $maxLength = 7;
}