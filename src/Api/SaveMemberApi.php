<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Requests\SaveMemberRequest;
use Msng\GmoPaymentGateway\Responses\SaveCardResponse;

class SaveMemberApi extends Api
{
    protected $endPoint = '/payment/SaveMember.idPass';

    protected $requestClass = SaveMemberRequest::class;

    protected $responseClass = SaveCardResponse::class;
}
