<?php

namespace msng\GmoPaymentGateway\Entities\Requests;

use msng\GmoPaymentGateway\Entities\Card;
use msng\GmoPaymentGateway\Entities\CardToken;
use msng\GmoPaymentGateway\Entities\Member;
use msng\GmoPaymentGateway\Entities\Site;

class SaveCardTokenRequest extends Request
{
    protected $params = [
        Site::ID => self::REQUIRED,
        Site::PASS => self::REQUIRED,

        Member::ID => self::REQUIRED,

        Card::DEFAULT_FLAG => self::OPTIONAL,

        CardToken::TOKEN => self::REQUIRED,
    ];
}
