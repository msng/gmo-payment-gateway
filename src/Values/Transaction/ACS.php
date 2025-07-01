<?php

declare(strict_types=1);

namespace msng\GmoPaymentGateway\Values\Transaction;

use msng\GmoPaymentGateway\Values\EnumValue;

/**
 * ACS呼出判定
 *
 * 2：ACS呼出要(3DS2.0)
 *
 * とりうる値は 2 のみ
 */
class ACS extends EnumValue
{
    // ACS呼出要(3DS2.0)
    const ACS_CALL_REQUIRED = '2';
}
