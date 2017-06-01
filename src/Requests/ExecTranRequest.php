<?php

namespace Msng\GmoPaymentGateway\Requests;

use Msng\GmoPaymentGateway\Entities\Access;
use Msng\GmoPaymentGateway\Entities\Card;
use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;
use Msng\GmoPaymentGateway\Entities\Transaction;

class ExecTranRequest extends Request
{
    protected $params = [
        Access::class => [
            Access::ID => self::REQUIRED,
            Access::PASS => self::REQUIRED
        ],
        Transaction::class => [
            Transaction::ORDER_ID => self::REQUIRED,
            Transaction::METHOD => self::REQUIRED
        ],
        Site::class => [
            Site::ID => self::REQUIRED,
            Site::PASS => self::REQUIRED
        ],
        Member::class => [
            Member::ID => self::REQUIRED
        ],
        Card::class => [
            Card::SEQ => self::REQUIRED
        ]
    ];
}