<?php

namespace Msng\GmoPaymentGateway\Entities\Responses;

use Msng\GmoPaymentGateway\Entities\Member;

class SearchMemberResponse extends Response
{
    protected $fields = [
        Member::ID,
        Member::NAME
    ];
}