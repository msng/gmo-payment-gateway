<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Card\Token;

class CardToken extends Entity
{
    const TOKEN = 'Token';

    protected $valueMap = [
        self::TOKEN => Token::class,
    ];
}
