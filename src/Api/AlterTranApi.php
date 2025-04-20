<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\AlterTranRequest;
use msng\GmoPaymentGateway\Entities\Responses\AlterTranResponse;

class AlterTranApi extends Api
{
    protected $endPoint = '/payment/AlterTran.idPass';

    protected $requestClass = AlterTranRequest::class;

    protected $responseClass = AlterTranResponse::class;
}
