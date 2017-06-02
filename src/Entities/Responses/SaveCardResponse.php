<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Card;
use msng\GmoPaymentGateway\Entities\Transaction;

class SaveCardResponse extends Response
{
    protected $fields = [
        Card::SEQ,
        Card::NUMBER,
        Transaction::FORWARD
    ];
}