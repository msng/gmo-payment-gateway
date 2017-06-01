<?php

namespace Msng\GmoPaymentGateway\Values\Transaction;

use Msng\GmoPaymentGateway\Values\Value;

class Method extends Value
{
    const 一括 = 1;
    const 分割 = 2;
    const ボーナス一括 = 3;
    const ボーナス分割 = 4;
    const リボ = 5;

    protected $enum = [
        self::一括,
        self::分割,
        self::ボーナス一括,
        self::ボーナス分割,
        self::リボ
    ];
}
