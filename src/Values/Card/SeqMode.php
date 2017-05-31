<?php

namespace Msng\GmoPaymentGateway\Values\Card;

use Msng\GmoPaymentGateway\Values\Value;

class SeqMode extends Value
{
    const LOGICAL = 0;
    const PHYSICAL = 1;

    protected $maxLength = 1;
}