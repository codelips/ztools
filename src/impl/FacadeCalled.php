<?php
namespace Ztools\Impl;

abstract class FacadeCalled
{
    protected static $adapter = null;

    protected abstract static function getAdapter();

    public static function __callStatic($method, $args)
    {
        if (static::$adapter === null) {
            static::$adapter = static::getAdapter();
        }
        return static::$adapter->$method(...$args);
    }
}
