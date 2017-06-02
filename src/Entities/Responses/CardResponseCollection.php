<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Card;

class CardResponseCollection extends ResponseCollection
{
    protected $itemClass = Card::class;
}
