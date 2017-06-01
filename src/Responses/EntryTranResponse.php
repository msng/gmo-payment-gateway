<?php

namespace Msng\GmoPaymentGateway\Responses;

use Msng\GmoPaymentGateway\Entities\Access;

class EntryTranResponse extends Response
{
    protected $fields = [
        Access::ID,
        Access::PASS
    ];

}