<?php

namespace Msng\GmoPaymentGateway\Entities\Response;

use Msng\GmoPaymentGateway\Entities\Card;
use Msng\GmoPaymentGateway\Entities\Transaction;
use Msng\GmoPaymentGateway\Values\Card\CardNumber;
use Msng\GmoPaymentGateway\Values\Card\CardSeq;
use Msng\GmoPaymentGateway\Values\Transaction\Forward;

class SaveCardResponse extends Response
{
    protected $valueMap = [
        Card::SEQ => CardSeq::class,
        Card::NUMBER => CardNumber::class,
        Transaction::FORWARD => Forward::class
    ];
}