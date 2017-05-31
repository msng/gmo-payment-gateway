<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Site\SiteId;
use Msng\GmoPaymentGateway\Values\Site\SitePass;

class Site extends Entity
{
    const KEY_SITE_ID = 'SiteID';
    const KEY_SITE_PASS = 'SitePass';

    protected $valueMap = [
        self::KEY_SITE_ID => SiteId::class,
        self::KEY_SITE_PASS => SitePass::class
    ];
}
