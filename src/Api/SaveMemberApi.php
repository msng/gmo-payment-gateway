<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Requests\SaveMemberRequest;

class SaveMemberApi extends Api
{
    protected $endPoint = '/payment/SaveMember.idPass';

    protected $requestClass = SaveMemberRequest::class;

    protected $responseClass = Member::class;
}
