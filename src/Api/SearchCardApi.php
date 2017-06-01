<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Entities\Requests\SearchCardRequest;
use Msng\GmoPaymentGateway\Entities\Responses\CardResponseCollection;

class SearchCardApi extends Api
{
    protected $endPoint = '/payment/SearchCard.idPass';

    protected $requestClass = SearchCardRequest::class;

    protected $responseClass = CardResponseCollection::class;
}