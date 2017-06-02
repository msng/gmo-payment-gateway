<?php

namespace msng\GmoPaymentGateway\Entities\Requests;

use msng\GmoPaymentGateway\Entities\Access;
use msng\GmoPaymentGateway\Entities\Card;
use msng\GmoPaymentGateway\Entities\Member;
use msng\GmoPaymentGateway\Entities\Site;
use msng\GmoPaymentGateway\Entities\Transaction;

class ExecTranRequest extends Request
{
    protected $params = [
        Access::ID => self::REQUIRED,
        Access::PASS => self::REQUIRED,

        Transaction::ORDER_ID => self::REQUIRED,
        Transaction::METHOD => self::REQUIRED,

        Site::ID => self::REQUIRED,
        Site::PASS => self::REQUIRED,

        Member::ID => self::REQUIRED,

        Card::SEQ => self::REQUIRED,
    ];
}