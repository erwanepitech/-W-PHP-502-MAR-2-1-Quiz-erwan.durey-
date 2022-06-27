<?php

namespace ContainerY4isKda;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        if ($this->valueHolderf14c1 === $returnValue = $this->valueHolderf14c1->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializerb3dd0 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderf14c1) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderf14c1 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerb3dd0 && ($this->initializerb3dd0->__invoke($valueHolderf14c1, $this, '__get', ['name' => $name], $this->initializerb3dd0) || 1) && $this->valueHolderf14c1 = $valueHolderf14c1;

        if (isset(self::$publicPropertiesdaeff[$name])) {
            return $this->valueHolderf14c1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
