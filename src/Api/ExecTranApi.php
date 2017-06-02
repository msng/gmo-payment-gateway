<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\ExecTranRequest;
use msng\GmoPaymentGateway\Entities\Responses\ExecTranResponse;

class ExecTranApi extends Api
{
    protected $endPoint = '/payment/ExecTran.idPass';

    protected $requestClass = ExecTranRequest::class;

    protected $responseClass = ExecTranResponse::class;
}
