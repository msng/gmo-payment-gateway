<?php

namespace msng\GmoPaymentGateway\Api;

use msng\GmoPaymentGateway\Entities\Requests\ExecTran3dsRequestWithToken;
use msng\GmoPaymentGateway\Entities\Responses\ErrorCollection;
use msng\GmoPaymentGateway\Entities\Responses\ExecTran3dsResponse;

class ExecTran3DsWithTokenApi extends Api
{
    protected $endPoint = '/payment/ExecTran.idPass';

    protected $requestClass = ExecTran3dsRequestWithToken::class;

    protected $responseClass = ExecTran3dsResponse::class;

    protected function createResponse($responseText)
    {
        // RedirectUrl contains raw '&' characters, so parse_str cannot parse it correctly.
        preg_match('/^ACS=(?P<ACS>.+?)&RedirectUrl=(?P<RedirectUrl>.+)$/', $responseText, $matches);

        $responseValues = [
            'ACS' => $matches['ACS'] ?? null,
            'RedirectUrl' => $matches['RedirectUrl'] ?? null,
        ];

        if (array_key_exists(static::ERROR_FLAG, $responseValues)) {
            $result = new ErrorCollection($responseValues);
        } else {
            $class = $this->responseClass;

            $result = new $class($responseValues);
        }

        return $result;
    }
}
