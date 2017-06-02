<?php

namespace msng\GmoPaymentGateway\Entities\Requests;

use msng\GmoPaymentGateway\Entities\ResourceEntity;
use msng\GmoPaymentGateway\Entities\Site;
use msng\GmoPaymentGateway\Interfaces\EntityInterface;

abstract class Request
{
    const REQUIRED = true;
    const OPTIONAL = false;

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @var array
     */
    private $paramValues = [];

    /**
     * @var Site
     */
    protected static $defaultSite;

    /**
     * Request constructor.
     *
     * @param array|EntityInterface[] $entities
     */
    public function __construct($entities = [])
    {
        if ($entities instanceof ResourceEntity) {
            $entities = [$entities];
        }

        if (static::$defaultSite) {
            $this->setParam(static::$defaultSite);
        }

        if ($entities) {
            $this->setParams($entities);
        }
    }

    /**
     * @param Site $site
     */
    public static function setDefaultSite(Site $site)
    {
        static::$defaultSite = $site;
    }

    /**
     * @param array $entities
     *
     * @return $this
     */
    public function setParams(array $entities)
    {
        foreach ($entities as $entity) {
            if ($entity instanceof ResourceEntity) {
                $this->setParam($entity);
            }
        }

        return $this;
    }

    /**
     * @param ResourceEntity $entity
     */
    public function setParam(ResourceEntity $entity)
    {
        $values = $entity->toArray();

        foreach ($values as $key => $value) {
            if (isset($this->params[$key])) {
                $this->paramValues[$key] = $value;
            }
        }
    }

    /**
     * @return array
     */
    public function getParamValues()
    {
        return $this->paramValues;
    }

    /**
     * @return bool
     */
    public function isReady()
    {
        foreach ($this->params as $key => $isRequired) {
            if ($isRequired === self::REQUIRED && !isset($this->paramValues[$key])) {
                return false;
            }
        }

        return true;
    }
}
