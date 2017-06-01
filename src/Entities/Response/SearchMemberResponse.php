<?php

namespace Msng\GmoPaymentGateway\Entities\Response;

use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Values\Member\MemberId;
use Msng\GmoPaymentGateway\Values\Member\MemberName;

class SearchMemberResponse extends Response
{
    protected $valueMap = [
        Member::ID => MemberId::class,
        Member::NAME => MemberName::class
    ];
}