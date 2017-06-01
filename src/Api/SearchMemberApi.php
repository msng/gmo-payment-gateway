<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Response\SearchMemberResponse;
use Msng\GmoPaymentGateway\Requests\SearchMemberRequest;

class SearchMemberApi extends Api
{
    protected $endPoint = '/payment/SearchMember.idPass';

    protected $requestClass = SearchMemberRequest::class;

    protected $responseClass = SearchMemberResponse::class;
}
