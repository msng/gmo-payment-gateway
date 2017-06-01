<?php

namespace Msng\GmoPaymentGateway\Responses;

use Msng\GmoPaymentGateway\Entities\Member;

class SaveMemberResponse extends Response
{
    protected $fields = [
        Member::ID
    ];
}