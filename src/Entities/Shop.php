<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Shop\ShopId;
use Msng\GmoPaymentGateway\Values\Shop\ShopPass;

class Shop extends Entity
{
    const ID = 'ShopID';
    const PASS = 'ShopPass';

    protected $valueMap = [
        self::ID => ShopId::class,
        self::PASS => ShopPass::class
    ];
}
