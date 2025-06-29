<?php

declare(strict_types=1);

namespace msng\GmoPaymentGateway\Values\ThreeDSecure;

use msng\GmoPaymentGateway\Values\EnumValue;

/**
 * 3DS利用フラグ
 * とりうる値は 2 のみ
 */
class TdFlag extends EnumValue
{
    // 3DS2.0を利用
    const USE = '2';
}
