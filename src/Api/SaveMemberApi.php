<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\SaveMemberRequest;
use msng\GmoPaymentGateway\Entities\Responses\SaveCardResponse;

class SaveMemberApi extends Api
{
    protected $endPoint = '/payment/SaveMember.idPass';

    protected $requestClass = SaveMemberRequest::class;

    protected $responseClass = SaveCardResponse::class;
}
