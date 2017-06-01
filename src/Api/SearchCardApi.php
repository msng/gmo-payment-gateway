<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Requests\SearchCardRequest;
use Msng\GmoPaymentGateway\Responses\CardResponseCollection;

class SearchCardApi extends Api
{
    protected $endPoint = '/payment/SearchCard.idPass';

    protected $requestClass = SearchCardRequest::class;

    protected $responseClass = CardResponseCollection::class;
}