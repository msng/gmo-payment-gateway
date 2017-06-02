<?php

namespace msng\GmoPaymentGateway\Entities\Requests;

use msng\GmoPaymentGateway\Entities\Member;
use msng\GmoPaymentGateway\Entities\Site;

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
