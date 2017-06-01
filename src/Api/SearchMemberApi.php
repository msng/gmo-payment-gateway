<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Requests\SearchMemberRequest;
use Msng\GmoPaymentGateway\Entities\Responses\SearchMemberResponse;

class SearchMemberApi extends Api
{
    protected $endPoint = '/payment/SearchMember.idPass';

    protected $requestClass = SearchMemberRequest::class;

    protected $responseClass = SearchMemberResponse::class;
}
