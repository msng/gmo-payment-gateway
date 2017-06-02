<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Member;

class SearchMemberResponse extends Response
{
    protected $fields = [
        Member::ID,
        Member::NAME
    ];
}