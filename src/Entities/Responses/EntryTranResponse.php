<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Access;

class EntryTranResponse extends Response
{
    protected $fields = [
        Access::ID,
        Access::PASS
    ];

}