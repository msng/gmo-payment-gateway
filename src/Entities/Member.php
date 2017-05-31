<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Member\MemberId;
use Msng\GmoPaymentGateway\Values\Member\MemberName;

class Member extends Entity
{
    const ID = 'MemberID';
    const NAME = 'MemberName';

    protected $valueMap = [
        self::ID => MemberId::class,
        self::NAME => MemberName::class
    ];
}
