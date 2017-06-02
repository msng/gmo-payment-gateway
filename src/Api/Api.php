<?php

namespace msng\GmoPaymentGateway\Api;

use GuzzleHttp\Client;
use msng\GmoPaymentGateway\Entities\Error;
use msng\GmoPaymentGateway\Entities\Requests\Request;
use msng\GmoPaymentGateway\Entities\Responses\ErrorCollection;
use msng\GmoPaymentGateway\Entities\Responses\Response;
use msng\GmoPaymentGateway\Entities\Responses\ResponseCollection;

abstract class Api
{
    const ERROR_FLAG = 'ErrCode';

    /**
     * @var string
     */
    protected static $defaultBaseUri;

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endPoint;

    /**
     * @var string
     */
    protected $requestClass = Request::class;

    /**
     * @var
     */
    protected $responseClass = '';

    /**
     * @var Request
     */
    private $request;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * Api constructor.
     */
    public function __construct()
    {
        if (static::$defaultBaseUri) {
            $this->setBaseUri(static::$defaultBaseUri);
        }
    }

    /**
     * @param string $baseUri
     */
    public static function setDefaultBaseUri($baseUri)
    {
        static::$defaultBaseUri = $baseUri;
    }

    /**
     * @param $baseUri
     *
     * @return $this
     */
    public function setBaseUri($baseUri)
    {
        $this->createClient($baseUri);

        return $this;
    }

    /**
     * @param string $baseUri
     *
     * @return Api
     */
    private function createClient($baseUri)
    {
        $this->httpClient = new Client([
            'base_uri' => $baseUri
        ]);

        return $this;
    }

    /**
     * @param Request $request
     *
     * @return $this
     */
    public function setRequest(Request $request)
    {
        if (!$request instanceof $this->requestClass) {
            throw new \InvalidArgumentException();
        }

        $this->request = $request;

        return $this;
    }

    /**
     * @param Request $request
     *
     * @return ResponseCollection|Response
     */
    public function send(Request $request = null)
    {
        if (!$request) {
            $request = $this->request;
        }

        if (!$request->isReady()) {
            $response = new ErrorCollection([
                Error::CODE => 'X01',
                Error::INFO => 'X00000001'
            ]);
        } else {

            $apiResponse = $this->httpClient->request(
                $this->method,
                $this->endPoint,
                [
                    'form_params' => $request->getParamValues()
                ]);

            $responseText = $apiResponse->getBody()->getContents();
            $response = $this->createResponse($responseText);
        }

        return $response;
    }

    /**
     * @param $responseText
     * @return Response|ResponseCollection
     */
    private function createResponse($responseText)
    {
        parse_str($responseText, $responseValues);

        if (array_key_exists(static::ERROR_FLAG, $responseValues)) {
            $result = new ErrorCollection($responseValues);
        } else {
            $class = $this->responseClass;

            $result = new $class($responseValues);
        }

        return $result;
    }

    /**
     * @param array $params
     * @return Response|ResponseCollection
     */
    public static function request($params = [])
    {
        $api = new static();

        $requestClass = $api->requestClass;
        $request = new $requestClass($params);

        $api->setRequest($request);
        $response = $api->send();

        return $response;
    }

}
