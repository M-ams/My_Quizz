<?php

namespace ContainerHeuCjfb;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2c9fa = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer16a8d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties43ab1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getConnection', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getMetadataFactory', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getExpressionBuilder', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'beginTransaction', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getCache', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getCache();
    }

    public function transactional($func)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'transactional', array('func' => $func), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'wrapInTransaction', array('func' => $func), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'commit', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->commit();
    }

    public function rollback()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'rollback', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getClassMetadata', array('className' => $className), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'createQuery', array('dql' => $dql), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'createNamedQuery', array('name' => $name), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'createQueryBuilder', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'flush', array('entity' => $entity), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'clear', array('entityName' => $entityName), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->clear($entityName);
    }

    public function close()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'close', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->close();
    }

    public function persist($entity)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'persist', array('entity' => $entity), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'remove', array('entity' => $entity), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'refresh', array('entity' => $entity), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'detach', array('entity' => $entity), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'merge', array('entity' => $entity), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getRepository', array('entityName' => $entityName), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'contains', array('entity' => $entity), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getEventManager', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getConfiguration', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'isOpen', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getUnitOfWork', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getProxyFactory', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'initializeObject', array('obj' => $obj), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'getFilters', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'isFiltersStateClean', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'hasFilters', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return $this->valueHolder2c9fa->hasFilters();
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

        $instance->initializer16a8d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2c9fa) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2c9fa = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2c9fa->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, '__get', ['name' => $name], $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        if (isset(self::$publicProperties43ab1[$name])) {
            return $this->valueHolder2c9fa->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c9fa;

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

        $targetObject = $this->valueHolder2c9fa;
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
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c9fa;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2c9fa;
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
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, '__isset', array('name' => $name), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c9fa;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2c9fa;
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
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, '__unset', array('name' => $name), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c9fa;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2c9fa;
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
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, '__clone', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        $this->valueHolder2c9fa = clone $this->valueHolder2c9fa;
    }

    public function __sleep()
    {
        $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, '__sleep', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;

        return array('valueHolder2c9fa');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer16a8d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer16a8d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer16a8d && ($this->initializer16a8d->__invoke($valueHolder2c9fa, $this, 'initializeProxy', array(), $this->initializer16a8d) || 1) && $this->valueHolder2c9fa = $valueHolder2c9fa;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2c9fa;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2c9fa;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
