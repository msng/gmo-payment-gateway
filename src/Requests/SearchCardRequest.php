<?php

namespace Msng\GmoPaymentGateway\Requests;

use Msng\GmoPaymentGateway\Entities\Card;
use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Entities\Site;

class SearchCardRequest extends Request
{
    protected $keys = [
        Site::class => [
            Site::ID => true,
            Site::PASS => true
        ],
        Member::class => [
            Member::ID => true
        ],
        Card::class => [
            Card::SEQ_MODE => true,
            Card::SEQ => false
        ]
    ];
}
