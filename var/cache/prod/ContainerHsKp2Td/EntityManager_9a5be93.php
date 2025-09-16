<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9c882 = null;
    private $initializerc6cb6 = null;
    private static $publicProperties80c2a = [
        
    ];
    public function getConnection()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getConnection', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getMetadataFactory', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getExpressionBuilder', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'beginTransaction', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getCache', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'transactional', array('func' => $func), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'commit', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->commit();
    }
    public function rollback()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'rollback', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getClassMetadata', array('className' => $className), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'createQuery', array('dql' => $dql), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'createNamedQuery', array('name' => $name), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'createQueryBuilder', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'flush', array('entity' => $entity), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'clear', array('entityName' => $entityName), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->clear($entityName);
    }
    public function close()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'close', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->close();
    }
    public function persist($entity)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'persist', array('entity' => $entity), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'remove', array('entity' => $entity), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'refresh', array('entity' => $entity), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'detach', array('entity' => $entity), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'merge', array('entity' => $entity), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'contains', array('entity' => $entity), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getEventManager', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getConfiguration', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'isOpen', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getUnitOfWork', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getProxyFactory', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'initializeObject', array('obj' => $obj), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getFilters', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'isFiltersStateClean', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'hasFilters', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return $this->valueHolder9c882->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc6cb6 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder9c882) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9c882 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder9c882->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, '__get', ['name' => $name], $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        if (isset(self::$publicProperties80c2a[$name])) {
            return $this->valueHolder9c882->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c882;
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
        $targetObject = $this->valueHolder9c882;
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
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c882;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder9c882;
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
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, '__isset', array('name' => $name), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c882;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder9c882;
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
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, '__unset', array('name' => $name), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c882;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9c882;
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
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, '__clone', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        $this->valueHolder9c882 = clone $this->valueHolder9c882;
    }
    public function __sleep()
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, '__sleep', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
        return array('valueHolder9c882');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc6cb6 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc6cb6;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'initializeProxy', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9c882;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9c882;
    }
}
