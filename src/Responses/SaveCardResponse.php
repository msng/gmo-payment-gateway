<?php

namespace Msng\GmoPaymentGateway\Responses;

use Msng\GmoPaymentGateway\Entities\Card;
use Msng\GmoPaymentGateway\Entities\Transaction;

class SaveCardResponse extends Response
{
    protected $fields = [
        Card::SEQ,
        Card::NUMBER,
        Transaction::FORWARD
    ];
}