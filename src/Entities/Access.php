<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Access\AccessId;
use Msng\GmoPaymentGateway\Values\Access\AccessPass;

class Access extends Entity
{
    const ID = 'AccessID';
    const PASS = 'AccessPass';

    protected $valueMap = [
        self::ID => AccessId::class,
        self::PASS => AccessPass::class
    ];
}