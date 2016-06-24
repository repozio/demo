<?php

namespace Repoz\Greeting;

/**
 * Class Greeting
 *
 * @package Repoz\Greeting
 */
class Greeting
{
    /**
     * Say hello
     *
     * @param string $name Name to say hello to
     *
     * @return string
     **/
    public static function sayHello($name)
    {
        return "Hello $name";
    }
}
