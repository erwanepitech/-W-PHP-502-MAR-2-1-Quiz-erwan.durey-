<?php

namespace ContainerY4isKda;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf14c1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb3dd0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdaeff = [
        
    ];

    public function getConnection()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getConnection', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getMetadataFactory', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getExpressionBuilder', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'beginTransaction', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getCache', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'transactional', array('func' => $func), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'commit', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->commit();
    }

    public function rollback()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'rollback', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getClassMetadata', array('className' => $className), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'createQuery', array('dql' => $dql), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'createNamedQuery', array('name' => $name), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'createQueryBuilder', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'flush', array('entity' => $entity), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'clear', array('entityName' => $entityName), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->clear($entityName);
    }

    public function close()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'close', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->close();
    }

    public function persist($entity)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'persist', array('entity' => $entity), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'remove', array('entity' => $entity), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'refresh', array('entity' => $entity), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'detach', array('entity' => $entity), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'merge', array('entity' => $entity), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'contains', array('entity' => $entity), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getEventManager', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getConfiguration', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'isOpen', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getUnitOfWork', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getProxyFactory', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'initializeObject', array('obj' => $obj), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'getFilters', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'isFiltersStateClean', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'hasFilters', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return $this->valueHolderf14c1->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb3dd0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf14c1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf14c1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf14c1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, '__get', ['name' => $name], $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        if (isset(self::$publicPropertiesdaeff[$name])) {
            return $this->valueHolderf14c1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf14c1;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf14c1;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf14c1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf14c1;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, '__isset', array('name' => $name), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf14c1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf14c1;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, '__unset', array('name' => $name), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf14c1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf14c1;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, '__clone', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        $this->valueHolderf14c1 = clone $this->valueHolderf14c1;
    }

    public function __sleep()
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, '__sleep', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        return array('valueHolderf14c1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb3dd0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb3dd0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'initializeProxy', array(), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf14c1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf14c1;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
