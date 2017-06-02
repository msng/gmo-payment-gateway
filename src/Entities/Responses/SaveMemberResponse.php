<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Member;

class SaveMemberResponse extends Response
{
    protected $fields = [
        Member::ID
    ];
}