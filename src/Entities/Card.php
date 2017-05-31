<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Card\CardNumber;
use Msng\GmoPaymentGateway\Values\Card\CardSeq;
use Msng\GmoPaymentGateway\Values\Card\CardToken;

class Card extends Entity
{
    const KEY_TOKEN = 'Token';
    const KEY_SEQ = 'CardSeq';
    const KEY_NUMBER = 'CardNo';

    protected $valueMap = [
        self::KEY_TOKEN => CardToken::class,
        self::KEY_SEQ => CardSeq::class,
        self::KEY_NUMBER => CardNumber::class
    ];
}
