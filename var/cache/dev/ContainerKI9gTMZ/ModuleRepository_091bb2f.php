<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9c882 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc6cb6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties80c2a = [
        
    ];

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getList', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;

        return $this->valueHolder9c882->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getInstalledModules', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;

        return $this->valueHolder9c882->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getMustBeConfiguredModules', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;

        return $this->valueHolder9c882->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getUpgradableModules', array(), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;

        return $this->valueHolder9c882->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;

        return $this->valueHolder9c882->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;

        return $this->valueHolder9c882->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'setActionUrls', array('collection' => $collection), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;

        return $this->valueHolder9c882->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;

        return $this->valueHolder9c882->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializerc6cb6 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder9c882) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder9c882 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder9c882->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializerc6cb6 && ($this->initializerc6cb6->__invoke($valueHolder9c882, $this, '__get', ['name' => $name], $this->initializerc6cb6) || 1) && $this->valueHolder9c882 = $valueHolder9c882;

        if (isset(self::$publicProperties80c2a[$name])) {
            return $this->valueHolder9c882->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
