<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Response\SaveCardResponse;
use Msng\GmoPaymentGateway\Requests\SaveCardTokenRequest;

class SaveCardApi extends Api
{
    protected $endPoint = '/payment/SaveCard.idPass';

    protected $requestClass = SaveCardTokenRequest::class;

    protected $responseClass = SaveCardResponse::class;
}
