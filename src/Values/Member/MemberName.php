<?php

namespace msng\GmoPaymentGateway\Values\Member;

use msng\GmoPaymentGateway\Values\Value;

class MemberName extends Value
{
    protected $maxLength = 255;

    protected $isMultiByte = true;

    protected $trimLength = true;
}
