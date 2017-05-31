<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Member\MemberId;
use Msng\GmoPaymentGateway\Values\Member\MemberName;

class Member extends Entity
{
    const KEY_MEMBER_ID = 'MemberID';
    const KEY_MEMBER_NAME = 'MemberName';

    protected $valueMap = [
        self::KEY_MEMBER_ID => MemberId::class,
        self::KEY_MEMBER_NAME => MemberName::class
    ];
}
