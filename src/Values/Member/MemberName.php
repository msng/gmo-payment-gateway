<?php

namespace Msng\GmoPaymentGateway\Values\Member;

use Msng\GmoPaymentGateway\Values\Value;

class MemberName extends Value
{
    protected $maxLength = 255;

    protected $isMultiByte = true;

    protected $trimLength = true;
}
