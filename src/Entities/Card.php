<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Card\CardNumber;
use Msng\GmoPaymentGateway\Values\Card\CardSeq;

class Card extends Entity
{
    const SEQ = 'CardSeq';
    const NUMBER = 'CardNo';

    protected $valueMap = [
        self::SEQ => CardSeq::class,
        self::NUMBER => CardNumber::class
    ];
}
