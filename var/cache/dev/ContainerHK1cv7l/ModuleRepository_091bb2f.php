<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
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

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getList', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getInstalledModules', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getMustBeConfiguredModules', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getUpgradableModules', array(), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'setActionUrls', array('collection' => $collection), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        return $this->valueHolder59d2b->clearCache($moduleName, $allShops);
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

        $instance->initializer51151 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder59d2b) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder59d2b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder59d2b->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializer51151 && ($this->initializer51151->__invoke($valueHolder59d2b, $this, '__get', ['name' => $name], $this->initializer51151) || 1) && $this->valueHolder59d2b = $valueHolder59d2b;

        if (isset(self::$publicPropertiesed0d3[$name])) {
            return $this->valueHolder59d2b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
