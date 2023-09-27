<?php

namespace msng\GmoPaymentGateway\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
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

    private $defaultOptions = [
        RequestOptions::TIMEOUT => 60
    ];

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
     * @param array $options
     * @return ResponseCollection|Response
     * @throws GuzzleException
     */
    public function send(Request $request = null, array $options = [])
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
            $options = array_merge($this->defaultOptions, $options, [
                RequestOptions::FORM_PARAMS => $request->getParamValues()
            ]);

            $apiResponse = $this->httpClient->request($this->method, $this->endPoint, $options);

            $responseText = $apiResponse->getBody()->getContents();
            $response = $this->createResponse($responseText);
        }

        return $response;
    }

    /**
     * @param array $params
     * @param array $options
     * @return Response|ResponseCollection
     * @throws GuzzleException
     */
    public static function request(array $params = [], array $options = [])
    {
        $api = new static();

        $requestClass = $api->requestClass;
        $request = new $requestClass($params);

        $api->setRequest($request);
        $response = $api->send(null, $options);

        return $response;
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

}
