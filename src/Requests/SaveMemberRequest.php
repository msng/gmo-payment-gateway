<?php

namespace Msng\GmoPaymentGateway\Requests;

use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;

class SaveMemberRequest extends Request
{
    /**
     * @var array Parameters to send to the API request; set the value true if the param is required.
     */
    protected $keys = [
        Site::class => [
            Site::KEY_SITE_ID => true,
            Site::KEY_SITE_PASS => true
        ],
        Member::class => [
            Member::KEY_MEMBER_ID => true,
            Member::KEY_MEMBER_NAME => false
        ]
    ];

}
