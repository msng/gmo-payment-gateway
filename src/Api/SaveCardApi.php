<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Requests\SaveCardTokenRequest;
use Msng\GmoPaymentGateway\Entities\Responses\SaveCardResponse;

class SaveCardApi extends Api
{
    protected $endPoint = '/payment/SaveCard.idPass';

    protected $requestClass = SaveCardTokenRequest::class;

    protected $responseClass = SaveCardResponse::class;
}
