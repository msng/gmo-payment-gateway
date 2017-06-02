<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\SearchCardRequest;
use msng\GmoPaymentGateway\Entities\Responses\CardResponseCollection;

class SearchCardApi extends Api
{
    protected $endPoint = '/payment/SearchCard.idPass';

    protected $requestClass = SearchCardRequest::class;

    protected $responseClass = CardResponseCollection::class;
}