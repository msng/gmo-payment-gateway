<?php

namespace Msng\GmoPaymentGateway\Values\Card;

use Msng\GmoPaymentGateway\Values\Value;

class HolderName extends Value
{
    protected $maxLength = 50;

    protected $isMultiByte = true;

    protected $trimLength = true;
}