<?php

namespace ContainerVZPkLM1;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfae56 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0ddb1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56ace = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer0ddb1 && ($this->initializer0ddb1->__invoke($valueHolderfae56, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer0ddb1) || 1) && $this->valueHolderfae56 = $valueHolderfae56;

        if ($this->valueHolderfae56 === $returnValue = $this->valueHolderfae56->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer0ddb1 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderfae56) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderfae56 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer0ddb1 && ($this->initializer0ddb1->__invoke($valueHolderfae56, $this, '__get', ['name' => $name], $this->initializer0ddb1) || 1) && $this->valueHolderfae56 = $valueHolderfae56;

        if (isset(self::$publicProperties56ace[$name])) {
            return $this->valueHolderfae56->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfae56;

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

        $targetObject = $this->valueHolderfae56;
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
        $this->initializer0ddb1 && ($this->initializer0ddb1->__invoke($valueHolderfae56, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0ddb1) || 1) && $this->valueHolderfae56 = $valueHolderfae56;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfae56;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfae56;
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
        $this->initializer0ddb1 && ($this->initializer0ddb1->__invoke($valueHolderfae56, $this, '__isset', array('name' => $name), $this->initializer0ddb1) || 1) && $this->valueHolderfae56 = $valueHolderfae56;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfae56;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfae56;
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
        $this->initializer0ddb1 && ($this->initializer0ddb1->__invoke($valueHolderfae56, $this, '__unset', array('name' => $name), $this->initializer0ddb1) || 1) && $this->valueHolderfae56 = $valueHolderfae56;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfae56;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfae56;
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
        $this->initializer0ddb1 && ($this->initializer0ddb1->__invoke($valueHolderfae56, $this, '__clone', array(), $this->initializer0ddb1) || 1) && $this->valueHolderfae56 = $valueHolderfae56;

        $this->valueHolderfae56 = clone $this->valueHolderfae56;
    }

    public function __sleep()
    {
        $this->initializer0ddb1 && ($this->initializer0ddb1->__invoke($valueHolderfae56, $this, '__sleep', array(), $this->initializer0ddb1) || 1) && $this->valueHolderfae56 = $valueHolderfae56;

        return array('valueHolderfae56');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0ddb1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0ddb1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0ddb1 && ($this->initializer0ddb1->__invoke($valueHolderfae56, $this, 'initializeProxy', array(), $this->initializer0ddb1) || 1) && $this->valueHolderfae56 = $valueHolderfae56;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfae56;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfae56;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
