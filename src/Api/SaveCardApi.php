<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Requests\SaveCardTokenRequest;
use Msng\GmoPaymentGateway\Responses\SaveCardResponse;

class SaveCardApi extends Api
{
    protected $endPoint = '/payment/SaveCard.idPass';

    protected $requestClass = SaveCardTokenRequest::class;

    protected $responseClass = SaveCardResponse::class;
}
