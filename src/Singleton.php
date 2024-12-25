<?php

declare(strict_types=1);

namespace Inilim\Singleton;

trait Singleton
{
    private static $instance = null;

    /**
     * Защищаем от создания через new Singleton
     */
    private function __construct() {}
    /**
     * Защищаем от создания через клонирование
     */
    private function __clone() {}
    /**
     * Защищаем от создания через unserialize
     */
    function __wakeup() {}

    /**
     * @return static
     */
    static function getInstance()
    {
        return self::$instance ??= new static();
    }

    /**
     * alias "getInstance"
     * @return static
     */
    static function self()
    {
        return self::$instance ??= new static();
    }
}
