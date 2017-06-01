<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Requests\EntryTranRequest;
use Msng\GmoPaymentGateway\Responses\EntryTranResponse;

class EntryTranApi extends Api
{
    protected $endPoint = '/payment/EntryTran.idPass';

    protected $requestClass = EntryTranRequest::class;

    protected $responseClass = EntryTranResponse::class;
}
