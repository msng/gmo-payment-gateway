<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\DeleteCardRequest;
use msng\GmoPaymentGateway\Entities\Responses\DeleteCardResponse;

class DeleteCardApi extends Api
{
    protected $endPoint = '/payment/DeleteCard.idPass';

    protected $requestClass = DeleteCardRequest::class;

    protected $responseClass = DeleteCardResponse::class;
}
