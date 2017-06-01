<?php

namespace Msng\GmoPaymentGateway\Entities\Response;

use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Values\Member\MemberId;

class SaveMemberResponse extends Response
{
    protected $valueMap = [
        Member::ID => MemberId::class
    ];
}