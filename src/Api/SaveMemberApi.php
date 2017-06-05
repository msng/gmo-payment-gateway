<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\SaveMemberRequest;
use msng\GmoPaymentGateway\Entities\Responses\SaveMemberResponse;

class SaveMemberApi extends Api
{
    protected $endPoint = '/payment/SaveMember.idPass';

    protected $requestClass = SaveMemberRequest::class;

    protected $responseClass = SaveMemberResponse::class;
}
