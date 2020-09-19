<?php

namespace Ztools\Impl;

abstract class FacadeCalled
{
    protected static $adapter = null;

    protected abstract static function getAdapter();

    public static function __callStatic($method, $args)
    {
        if (!in_array(static::class, static::$adapter ?? [])) {
            static::$adapter[static::class] = static::getAdapter();
        }
        return static::$adapter[static::class]->$method(...$args);
    }
}
