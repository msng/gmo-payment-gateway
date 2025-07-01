<?php

namespace msng\GmoPaymentGateway\Entities\Requests;

use msng\GmoPaymentGateway\Entities\Access;
use msng\GmoPaymentGateway\Entities\CardToken;
use msng\GmoPaymentGateway\Entities\Transaction;

class ExecTran3dsRequestWithToken extends Request
{
    protected $params = [
        Access::ID => self::REQUIRED,
        Access::PASS => self::REQUIRED,

        Transaction::ORDER_ID => self::REQUIRED,
        Transaction::METHOD => self::REQUIRED,
        Transaction::RET_URL => self::REQUIRED,
        Transaction::CALLBACK_TYPE => self::OPTIONAL,

        CardToken::TOKEN => self::REQUIRED,
    ];
}
