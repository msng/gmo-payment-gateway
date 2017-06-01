<?php

namespace Msng\GmoPaymentGateway\Entities\Requests;

use Msng\GmoPaymentGateway\Entities\Card;
use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;

class SearchCardRequest extends Request
{
    protected $params = [
        Site::ID => self::REQUIRED,
        Site::PASS => self::REQUIRED,

        Member::ID => self::REQUIRED,

        Card::SEQ_MODE => self::REQUIRED,
        Card::SEQ => self::OPTIONAL
    ];
}
