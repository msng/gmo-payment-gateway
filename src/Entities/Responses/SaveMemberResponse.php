<?php

namespace Msng\GmoPaymentGateway\Entities\Responses;

use Msng\GmoPaymentGateway\Entities\Member;

class SaveMemberResponse extends Response
{
    protected $fields = [
        Member::ID
    ];
}