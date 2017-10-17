<?php

namespace msng\GmoPaymentGateway\Values\Card;

use msng\GmoPaymentGateway\Values\EnumValue;

class DefaultFlag extends EnumValue
{
    //継続課金対象としない(デフォルト)
    const FALSE = '0';

    //継続課金対象とする
    const TRUE = '1';

    /**
     * @return bool
     */
    public function isDefault()
    {
        return $this->value === static::TRUE;
    }
}
