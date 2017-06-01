<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Requests\SaveMemberRequest;
use Msng\GmoPaymentGateway\Entities\Responses\SaveCardResponse;

class SaveMemberApi extends Api
{
    protected $endPoint = '/payment/SaveMember.idPass';

    protected $requestClass = SaveMemberRequest::class;

    protected $responseClass = SaveCardResponse::class;
}
