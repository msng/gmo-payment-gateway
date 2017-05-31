<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Member;
use Msng\GmoPaymentGateway\Requests\SearchMemberRequest;

class SearchMemberApi extends Api
{
    protected $path = '/payment/SearchMember.idPass';

    protected $requestClass = SearchMemberRequest::class;

    protected $responseClass = Member::class;
}
