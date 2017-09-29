<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\SaveCardTokenRequest;
use msng\GmoPaymentGateway\Entities\Responses\SaveCardResponse;

class SaveCardTokenApi extends Api
{
    protected $endPoint = '/payment/SaveCard.idPass';

    protected $requestClass = SaveCardTokenRequest::class;

    protected $responseClass = SaveCardResponse::class;
}
