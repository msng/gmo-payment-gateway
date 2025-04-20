<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Access;
use msng\GmoPaymentGateway\Entities\Forward;
use msng\GmoPaymentGateway\Entities\Transaction;

class AlterTranResponse extends Response
{
    protected $fields = [
        Access::ID,
        Access::PASS,
        Forward::CODE,
        Transaction::APPROVE,
        Transaction::TRAN_ID,
    ];
}
