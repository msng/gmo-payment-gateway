<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Card;

class DeleteCardResponse extends Response
{
    protected $fields = [
        Card::SEQ,
    ];
}
