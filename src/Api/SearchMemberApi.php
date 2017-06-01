<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Requests\SearchMemberRequest;
use Msng\GmoPaymentGateway\Responses\SearchMemberResponse;

class SearchMemberApi extends Api
{
    protected $endPoint = '/payment/SearchMember.idPass';

    protected $requestClass = SearchMemberRequest::class;

    protected $responseClass = SearchMemberResponse::class;
}
