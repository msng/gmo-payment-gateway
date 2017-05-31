<?php

namespace Msng\GmoPaymentGateway\Requests;

use Msng\GmoPaymentGateway\Entities\Card;
use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;

class SaveCardTokenRequest extends Request
{
    protected $keys = [
        Site::class => [
            Site::KEY_SITE_ID => true,
            Site::KEY_SITE_PASS => true
        ],
        Member::class => [
            Member::KEY_MEMBER_ID => true
        ],
        Card::class => [
            Card::KEY_TOKEN => true
        ]
    ];
}
