<?php

namespace Msng\GmoPaymentGateway\Requests;

use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;

class SearchMemberRequest extends Request
{
    protected $keys = [
        Site::class => [
            Site::ID => true,
            Site::PASS => true
        ],
        Member::class => [
            Member::ID => true
        ]
    ];
}