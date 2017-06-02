<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\SearchMemberRequest;
use msng\GmoPaymentGateway\Entities\Responses\SearchMemberResponse;

class SearchMemberApi extends Api
{
    protected $endPoint = '/payment/SearchMember.idPass';

    protected $requestClass = SearchMemberRequest::class;

    protected $responseClass = SearchMemberResponse::class;
}
