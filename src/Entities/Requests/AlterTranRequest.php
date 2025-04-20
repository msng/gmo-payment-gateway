<?php

namespace msng\GmoPaymentGateway\Entities\Requests;

use msng\GmoPaymentGateway\Entities\Access;
use msng\GmoPaymentGateway\Entities\Shop;
use msng\GmoPaymentGateway\Entities\Transaction;

class AlterTranRequest extends Request
{
    protected $params = [
        Shop::ID => self::REQUIRED,
        Shop::PASS => self::REQUIRED,

        Access::ID => self::REQUIRED,
        Access::PASS => self::REQUIRED,

        Transaction::JOB_CD => self::REQUIRED,
    ];
}
