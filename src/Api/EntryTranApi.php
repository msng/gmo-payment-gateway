<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Response\EntryTranResponse;
use Msng\GmoPaymentGateway\Requests\EntryTranRequest;

class EntryTranApi extends Api
{
    protected $endPoint = '/payment/EntryTran.idPass';

    protected $requestClass = EntryTranRequest::class;

    protected $responseClass = EntryTranResponse::class;
}
