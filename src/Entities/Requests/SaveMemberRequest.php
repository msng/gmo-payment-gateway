<?php

namespace Msng\GmoPaymentGateway\Entities\Requests;

use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;

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
