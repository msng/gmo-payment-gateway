<?php

namespace Msng\GmoPaymentGateway\Entities\Requests;

use Msng\GmoPaymentGateway\Entities\Shop;
use Msng\GmoPaymentGateway\Entities\Transaction;

class EntryTranRequest extends Request
{
    protected $params = [
        Shop::ID => self::REQUIRED,
        Shop::PASS => self::REQUIRED,

        Transaction::ORDER_ID => self::REQUIRED,
        Transaction::JOB_CD => self::REQUIRED,
        Transaction::AMOUNT => self::REQUIRED
    ];
}
