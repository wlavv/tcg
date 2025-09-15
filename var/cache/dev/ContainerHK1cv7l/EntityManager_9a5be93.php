<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder59d2b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer51151 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesed0d3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getConnection', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getMetadataFactory', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getExpressionBuilder', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'beginTransaction', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getCache', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'transactional', array('func' => $func), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'commit', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->commit();
    }

    public function rollback()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'rollback', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getClassMetadata', array('className' => $className), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'createQuery', array('dql' => $dql), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'createNamedQuery', array('name' => $name), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'createQueryBuilder', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'flush', array('entity' => $entity), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'clear', array('entityName' => $entityName), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->clear($entityName);
    }

    public function close()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'close', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->close();
    }

    public function persist($entity)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'persist', array('entity' => $entity), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'remove', array('entity' => $entity), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'refresh', array('entity' => $entity), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'detach', array('entity' => $entity), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'merge', array('entity' => $entity), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'contains', array('entity' => $entity), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getEventManager', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getConfiguration', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'isOpen', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getUnitOfWork', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getProxyFactory', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'initializeObject', array('obj' => $obj), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getFilters', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'isFiltersStateClean', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'hasFilters', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->hasFilters();
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

        $instance->initializer51151 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder59d2b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59d2b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59d2b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, '__get', ['name' => $name], $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        if (isset(self::$publicPropertiesed0d3[$name])) {
            return $this->valueHolder59d2b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59d2b;

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

        $targetObject = $this->valueHolder59d2b;
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
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59d2b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59d2b;
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
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, '__isset', array('name' => $name), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59d2b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder59d2b;
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
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, '__unset', array('name' => $name), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59d2b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder59d2b;
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
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, '__clone', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        $this->valueHolder59d2b = clone $this->valueHolder59d2b;
    }

    public function __sleep()
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, '__sleep', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return array('valueHolder59d2b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer51151 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer51151;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'initializeProxy', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59d2b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59d2b;
    }
}
