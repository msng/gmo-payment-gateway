<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Collections\CardResponseCollection;
use Msng\GmoPaymentGateway\Requests\SearchCardRequest;

class SearchCardApi extends Api
{
    protected $endPoint = '/payment/SearchCard.idPass';

    protected $requestClass = SearchCardRequest::class;

    protected $responseClass = CardResponseCollection::class;
}