<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Transaction;

class ExecTran3dsResponse extends Response
{
    protected $fields = [
        Transaction::ACS,
        Transaction::REDIRECT_URL
    ];
}
