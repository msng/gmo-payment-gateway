<?php

namespace Msng\GmoPaymentGateway\Values\Card;

use Msng\GmoPaymentGateway\Values\EnumValue;

class DefaultFlag extends EnumValue
{
    //継続課金対象としない(デフォルト)
    const FALSE = '0';

    //継続課金対象とする
    const TRUE = '1';
}
