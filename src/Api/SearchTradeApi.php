<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\SearchTradeRequest;
use msng\GmoPaymentGateway\Entities\Responses\SearchTradeResponse;

class SearchTradeApi extends Api
{
    protected $endPoint = '/payment/SearchTrade.idPass';

    protected $requestClass = SearchTradeRequest::class;

    protected $responseClass = SearchTradeResponse::class;
}
