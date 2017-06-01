<?php

namespace Msng\GmoPaymentGateway\Values\Transaction;

use Msng\GmoPaymentGateway\Values\EnumValue;

class Method extends EnumValue
{
    const 一括 = '1';
    const 分割 = '2';
    const ボーナス一括 = '3';
    const ボーナス分割 = '4';
    const リボ = '5';
}
