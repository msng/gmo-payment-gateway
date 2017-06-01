<?php

namespace Msng\GmoPaymentGateway\Entities\Response;

use Msng\GmoPaymentGateway\Entities\Access;
use Msng\GmoPaymentGateway\Values\Access\AccessId;
use Msng\GmoPaymentGateway\Values\Access\AccessPass;

class EntryTranResponse extends Response
{
    protected $valueMap = [
        Access::ID => AccessId::class,
        Access::PASS => AccessPass::class
    ];

}