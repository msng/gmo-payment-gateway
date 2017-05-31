<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Error\ErrorCode;
use Msng\GmoPaymentGateway\Values\Error\ErrorInfo;

class Error extends Entity
{
    const CODE = 'ErrCode';
    const INFO = 'ErrInfo';

    protected $valueMap = [
        self::CODE => ErrorCode::class,
        self::INFO => ErrorInfo::class
    ];
}
