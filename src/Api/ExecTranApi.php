<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Response\ExecTranResponse;
use Msng\GmoPaymentGateway\Requests\ExecTranRequest;

class ExecTranApi extends Api
{
    protected $endPoint = '/payment/ExecTran.idPass';

    protected $requestClass = ExecTranRequest::class;

    protected $responseClass = ExecTranResponse::class;
}
