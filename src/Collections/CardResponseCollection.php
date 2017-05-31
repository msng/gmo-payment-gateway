<?php

namespace Msng\GmoPaymentGateway\Collections;

use Msng\GmoPaymentGateway\Entities\Card;

class CardResponseCollection extends ResponseCollection
{
    protected $itemClass = Card::class;
}
