<?php

namespace Msng\GmoPaymentGateway\Requests;

use Msng\GmoPaymentGateway\Entities\CardToken;
use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;

class SaveCardTokenRequest extends Request
{
    protected $keys = [
        Site::class => [
            Site::ID => self::REQUIRED,
            Site::PASS => self::REQUIRED
        ],
        Member::class => [
            Member::ID => self::REQUIRED
        ],
        CardToken::class => [
            CardToken::TOKEN => self::REQUIRED
        ]
    ];
}
