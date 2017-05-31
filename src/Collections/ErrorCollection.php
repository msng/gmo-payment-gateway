<?php

namespace Msng\GmoPaymentGateway\Collections;

use Msng\GmoPaymentGateway\Entities\Error;
use Illuminate\Support\Collection;

class ErrorCollection extends Collection
{
    public function __construct(array $errors = [])
    {
        $errorCodeList = explode('|', $errors['ErrCode']);
        $errorInfoList = explode('|', $errors['ErrInfo']);

        $errors = [];

        foreach ($errorCodeList as $index => $errorCode) {
            $errorInfo = $errorInfoList[$index];

            $errors[] = new Error([
                Error::CODE => $errorCode,
                Error::INFO => $errorInfo
            ]);
        }

        parent::__construct($errors);
    }

}
