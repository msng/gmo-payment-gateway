<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\EntryTranRequest;
use msng\GmoPaymentGateway\Entities\Responses\EntryTranResponse;

class EntryTranApi extends Api
{
    protected $endPoint = '/payment/EntryTran.idPass';

    protected $requestClass = EntryTranRequest::class;

    protected $responseClass = EntryTranResponse::class;
}
