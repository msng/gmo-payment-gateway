<?php

namespace Msng\GmoPaymentGateway\Entities\Responses;

use Msng\GmoPaymentGateway\Entities\Error;

class ErrorCollection extends ResponseCollection
{
    protected $itemClass = Error::class;
}
