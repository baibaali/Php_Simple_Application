<?php

namespace ContainerEgqQ5Br;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder52e7f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc1dbc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties17fe7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getConnection', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getMetadataFactory', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getExpressionBuilder', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'beginTransaction', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getCache', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'transactional', array('func' => $func), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'commit', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->commit();
    }

    public function rollback()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'rollback', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getClassMetadata', array('className' => $className), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'createQuery', array('dql' => $dql), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'createNamedQuery', array('name' => $name), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'createQueryBuilder', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'flush', array('entity' => $entity), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'clear', array('entityName' => $entityName), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->clear($entityName);
    }

    public function close()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'close', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->close();
    }

    public function persist($entity)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'persist', array('entity' => $entity), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'remove', array('entity' => $entity), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'refresh', array('entity' => $entity), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'detach', array('entity' => $entity), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'merge', array('entity' => $entity), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'contains', array('entity' => $entity), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getEventManager', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getConfiguration', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'isOpen', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getUnitOfWork', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getProxyFactory', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'initializeObject', array('obj' => $obj), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'getFilters', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'isFiltersStateClean', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'hasFilters', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return $this->valueHolder52e7f->hasFilters();
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

        $instance->initializerc1dbc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder52e7f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder52e7f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder52e7f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, '__get', ['name' => $name], $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        if (isset(self::$publicProperties17fe7[$name])) {
            return $this->valueHolder52e7f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52e7f;

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

        $targetObject = $this->valueHolder52e7f;
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
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52e7f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder52e7f;
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
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, '__isset', array('name' => $name), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52e7f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder52e7f;
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
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, '__unset', array('name' => $name), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52e7f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder52e7f;
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
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, '__clone', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        $this->valueHolder52e7f = clone $this->valueHolder52e7f;
    }

    public function __sleep()
    {
        $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, '__sleep', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;

        return array('valueHolder52e7f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc1dbc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc1dbc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc1dbc && ($this->initializerc1dbc->__invoke($valueHolder52e7f, $this, 'initializeProxy', array(), $this->initializerc1dbc) || 1) && $this->valueHolder52e7f = $valueHolder52e7f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder52e7f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder52e7f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
