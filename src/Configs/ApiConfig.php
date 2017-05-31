<?php

namespace Msng\GmoPaymentGateway\Configs;

use Msng\GmoPaymentGateway\Requests\Request;

class ApiConfig
{
    const KEY_BASE_URI = 'baseUri';
    const KEY_REQUEST = 'request';

    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var Request
     */
    private $request;

    /**
     * ApiConfig constructor.
     *
     * @param array $params
     */
    public function __construct(array $params = [])
    {
        if (isset($params[static::KEY_BASE_URI])) {
            $this->setBaseUri($params[static::KEY_BASE_URI]);
        }

        if (isset($params[static::KEY_REQUEST])) {
            $this->setRequest($params[static::KEY_REQUEST]);
        }
    }

    /**
     * @param string $baseUri
     *
     * @return ApiConfig
     */
    public function setBaseUri($baseUri)
    {
        $this->baseUri = $baseUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUri()
    {
        return $this->baseUri;
    }

    /**
     * @param Request $request
     *
     * @return ApiConfig
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

}
