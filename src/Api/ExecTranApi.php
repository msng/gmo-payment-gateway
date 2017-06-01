<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Requests\ExecTranRequest;
use Msng\GmoPaymentGateway\Responses\ExecTranResponse;

class ExecTranApi extends Api
{
    protected $endPoint = '/payment/ExecTran.idPass';

    protected $requestClass = ExecTranRequest::class;

    protected $responseClass = ExecTranResponse::class;
}
