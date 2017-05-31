<?php

namespace Msng\GmoPaymentGateway\Api;

use Msng\GmoPaymentGateway\Collections\ResponseCollection;
use Msng\GmoPaymentGateway\Configs\ApiConfig;
use Msng\GmoPaymentGateway\Collections\ErrorCollection;
use Msng\GmoPaymentGateway\Entities\Entity;
use Msng\GmoPaymentGateway\Interfaces\Entities\EntityInterface;
use Msng\GmoPaymentGateway\Requests\Request;
use GuzzleHttp\Client;

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
     *
     * @param ApiConfig $config
     */
    public function __construct(ApiConfig $config = null)
    {
        if (static::$defaultBaseUri) {
            $this->setBaseUri(static::$defaultBaseUri);
        }

        if ($config) {
            if ($config->getBaseUri()) {
                $this->setBaseUri($config->getBaseUri());
            }

            if ($config->getRequest()) {
                $this->setRequest($config->getRequest());
            }
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
     * @return Entity|ErrorCollection
     */
    public function send(Request $request = null)
    {
        if (!$request) {
            $request = $this->request;
        }

        $apiResponse = $this->httpClient->request(
            $this->method,
            $this->endPoint,
            [
                'form_params' => $request->getParams()
            ]);

        $responseText = $apiResponse->getBody()->getContents();
        $response = $this->createResponse($responseText);

        return $response;
    }

    /**
     * @param $responseText
     * @return ErrorCollection|EntityInterface
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
     * @return EntityInterface|ResponseCollection
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
