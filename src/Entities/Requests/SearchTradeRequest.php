<?php

namespace msng\GmoPaymentGateway\Entities\Requests;

use msng\GmoPaymentGateway\Entities\Mask;
use msng\GmoPaymentGateway\Entities\Shop;
use msng\GmoPaymentGateway\Entities\Transaction;

class SearchTradeRequest extends Request
{
    protected $params = [
        Shop::ID => self::REQUIRED,
        Shop::PASS => self::REQUIRED,

        Transaction::ORDER_ID => self::REQUIRED,

        Mask::USE_SITE_MASK_LEVEL => self::OPTIONAL,
        Mask::USE_FLOATING_MASK => self::OPTIONAL
    ];
}
