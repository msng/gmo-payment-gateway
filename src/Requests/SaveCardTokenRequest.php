<?php

namespace Msng\GmoPaymentGateway\Requests;

use Msng\GmoPaymentGateway\Entities\CardToken;
use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;

class SaveCardTokenRequest extends Request
{
    protected $keys = [
        Site::class => [
            Site::ID => true,
            Site::PASS => true
        ],
        Member::class => [
            Member::ID => true
        ],
        CardToken::class => [
            CardToken::TOKEN => true
        ]
    ];
}
