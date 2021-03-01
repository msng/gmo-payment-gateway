<?php

namespace msng\GmoPaymentGateway\Values\Transaction;

use msng\GmoPaymentGateway\Values\EnumValue;

class Status extends EnumValue
{
    const 未決済 = 'UNPROCESSED';
    const 未決済3DS登録済 = 'AUTHENTICATED';
    const 有効性チェック = 'CHECK';
    const 即時売上 = 'CAPTURE';
    const 仮売上 = 'AUTH';
    const 実売上 = 'SALES';
    const 取消 = 'VOID';
    const 返品 = 'RETURN';
    const 月跨り返品 = 'RETURNX';
    const 簡易オーソリ = 'SAUTH';
}
