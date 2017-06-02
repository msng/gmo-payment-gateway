<?php

namespace msng\GmoPaymentGateway\Entities\Responses;

use msng\GmoPaymentGateway\Entities\Error;

class ErrorCollection extends ResponseCollection
{
    protected $itemClass = Error::class;
}
