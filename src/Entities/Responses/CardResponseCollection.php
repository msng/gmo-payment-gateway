<?php

namespace Msng\GmoPaymentGateway\Entities\Responses;

use Msng\GmoPaymentGateway\Entities\Card;

class CardResponseCollection extends ResponseCollection
{
    protected $itemClass = Card::class;
}
