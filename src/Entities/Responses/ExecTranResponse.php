<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Transaction;

class ExecTranResponse extends Response
{
    protected $fields = [
        Transaction::ORDER_ID,
        Transaction::FORWARD,
        Transaction::METHOD,
        Transaction::APPROVE,
        Transaction::TRAN_DATE,
        Transaction::CHECK_STRING
    ];
}