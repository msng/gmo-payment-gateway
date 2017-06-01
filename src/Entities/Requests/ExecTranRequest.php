<?php

namespace Msng\GmoPaymentGateway\Entities\Requests;

use Msng\GmoPaymentGateway\Entities\Access;
use Msng\GmoPaymentGateway\Entities\Card;
use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;
use Msng\GmoPaymentGateway\Entities\Transaction;

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