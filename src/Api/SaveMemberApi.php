<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Response\SaveCardResponse;
use Msng\GmoPaymentGateway\Requests\SaveMemberRequest;

class SaveMemberApi extends Api
{
    protected $endPoint = '/payment/SaveMember.idPass';

    protected $requestClass = SaveMemberRequest::class;

    protected $responseClass = SaveCardResponse::class;
}
