<?php

namespace App\Core;

class App
{
    protected static $registry = [];

    /**
     * bind a key in the registry to their respective value
     * 
     * @param string $key
     * @param mixed  $value
     * @return void
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * returns a value from the registry
     * 
     * @param string $key
     * @return mixed value of the key in the registry
     */
    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the container.");
        }
        return static::$registry[$key];
    }
}