<?php

namespace Msng\GmoPaymentGateway\Requests;

use Msng\GmoPaymentGateway\Entities\Shop;
use Msng\GmoPaymentGateway\Entities\Transaction;

class EntryTranRequest extends Request
{
    protected $params = [
        Shop::class => [
            Shop::ID => self::REQUIRED,
            Shop::PASS => self::REQUIRED
        ],
        Transaction::class => [
            Transaction::ORDER_ID => self::REQUIRED,
            Transaction::JOB_CD => self::REQUIRED,
            Transaction::AMOUNT => self::REQUIRED
        ]
    ];
}
