<?php

namespace msng\GmoPaymentGateway\Entities\Requests;

use msng\GmoPaymentGateway\Entities\Member;
use msng\GmoPaymentGateway\Entities\Site;

class SaveMemberRequest extends Request
{
    /**
     * @var array Parameters to send to the API request; set the value true if the param is required.
     */
    protected $params = [
        Site::ID => self::REQUIRED,
        Site::PASS => self::REQUIRED,

        Member::ID => self::REQUIRED,
        Member::NAME => self::OPTIONAL
    ];

}
