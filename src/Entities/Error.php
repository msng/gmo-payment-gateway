<?php

namespace Msng\GmoPaymentGateway\Entities;

use Msng\GmoPaymentGateway\Values\Error\ErrorCode;
use Msng\GmoPaymentGateway\Values\Error\ErrorInfo;

class Error extends Entity
{
    const KEY_ERROR_CODE = 'ErrCode';
    const KEY_ERROR_INFO = 'ErrInfo';

    protected $valueMap = [
        self::KEY_ERROR_CODE => ErrorCode::class,
        self::KEY_ERROR_INFO => ErrorInfo::class
    ];
}
