<?php

namespace msng\GmoPaymentGateway\Values\Card;

use msng\GmoPaymentGateway\Values\Value;

class HolderName extends Value
{
    protected $maxLength = 50;

    protected $isMultiByte = true;

    protected $trimLength = true;
}