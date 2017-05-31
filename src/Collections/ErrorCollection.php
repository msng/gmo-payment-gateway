<?php

namespace Msng\GmoPaymentGateway\Collections;

use Msng\GmoPaymentGateway\Entities\Error;

class ErrorCollection extends ResponseCollection
{
    protected $itemClass = Error::class;
}
