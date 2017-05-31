<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Site\SiteId;
use Msng\GmoPaymentGateway\Values\Site\SitePass;

class Site extends Entity
{
    const ID = 'SiteID';
    const PASS = 'SitePass';

    protected $valueMap = [
        self::ID => SiteId::class,
        self::PASS => SitePass::class
    ];
}
