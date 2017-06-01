<?php

namespace Msng\GmoPaymentGateway\Entities\Requests;

use Msng\GmoPaymentGateway\Entities\Site;
use Msng\GmoPaymentGateway\Interfaces\EntityInterface;

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
        if ($entities instanceof EntityInterface) {
            $entities = [$entities];
        }

        if (static::$defaultSite) {
            $this->addParams(static::$defaultSite);
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
            if ($entity instanceof EntityInterface) {
                if (isset($this->params[get_class($entity)])) {
                    $this->addParams($entity, $this->getKeysForEntity($entity));
                }
            }
        }

        return $this;
    }

    /**
     * @param EntityInterface $entity
     * @param array|string[] $requestKeys
     */
    public function addParams(EntityInterface $entity, array $requestKeys = null)
    {
        if (is_null($requestKeys)) {
            $requestKeys = $this->getKeysForEntity($entity);
        }

        $values = $entity->toArray();

        foreach ($requestKeys as $key => $required) {
            if (($required === static::REQUIRED) && (!isset($values[$key]) || is_null($values[$key]))) {
                throw new \DomainException(sprintf('Required param %s for %s is missing.', $key, get_class($this)));
            }

            if (isset($values[$key])) {
                $this->paramValues[$key] = $values[$key];
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
     * @param EntityInterface $entity
     * @return array
     */
    private function getKeysForEntity(EntityInterface $entity)
    {
        $keys = [];

        if (isset($this->params[get_class($entity)])) {
            $keys = $this->params[get_class($entity)];
        }

        return $keys;
    }

}
