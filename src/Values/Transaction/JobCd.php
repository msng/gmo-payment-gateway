<?php

namespace Msng\GmoPaymentGateway\Values\Transaction;

use Msng\GmoPaymentGateway\Values\Value;

class JobCd extends Value
{
    // 有効性チェック
    const CHECK = 'CHECK';

    // 即時売上
    const CAPTURE = 'CAPTURE';

    // 仮売上
    const AUTH = 'AUTH';

    // 簡易オーソリ
    const SAUTH = 'SAUTH';

    protected $enum = [
        self::CHECK,
        self::CAPTURE,
        self::AUTH,
        self::SAUTH
    ];
}
