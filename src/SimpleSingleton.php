<?php

declare(strict_types=1);

namespace Inilim\Singleton;

trait SimpleSingleton
{
    private static $instance = null;

    /**
     * Защищаем от создания через new Singleton
     */
    private function __construct() {}

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
