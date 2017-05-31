<?php

namespace Msng\GmoPaymentGateway\Requests;

use Msng\GmoPaymentGateway\Entities\Site;
use Msng\GmoPaymentGateway\Interfaces\Entities\EntityInterface;

abstract class Request
{
    /**
     * @var array
     */
    protected $keys = [];

    /**
     * @var array
     */
    private $params = [];

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
                if (isset($this->keys[get_class($entity)])) {
                    $this->addParams($entity, $this->getKeysForEntity($entity));
                }
            }
        }

        return $this;
    }

    /**
     * @param EntityInterface $entity
     * @param array|string[] $keys
     */
    public function addParams(EntityInterface $entity, array $keys = null)
    {
        if (is_null($keys)) {
            $keys = $this->getKeysForEntity($entity);
        }

        $values = $entity->toArray();

        foreach ($keys as $key => $required) {
            if (($required === true) && (!isset($values[$key]) || is_null($values[$key]))) {
                throw new \DomainException(sprintf('Required param %s for %s is missing.', $key, get_class($this)));
            }

            $this->params[$key] = $values[$key];
        }
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param EntityInterface $entity
     * @return array
     */
    private function getKeysForEntity(EntityInterface $entity)
    {
        $keys = [];

        if (isset($this->keys[get_class($entity)])) {
            $keys = $this->keys[get_class($entity)];
        }

        return $keys;
    }

}
