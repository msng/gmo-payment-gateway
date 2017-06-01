<?php

namespace Msng\GmoPaymentGateway\Entities\Requests;

use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;

class SearchMemberRequest extends Request
{
    protected $params = [
        Site::class => [
            Site::ID => self::REQUIRED,
            Site::PASS => self::REQUIRED
        ],
        Member::class => [
            Member::ID => self::REQUIRED
        ]
    ];
}
