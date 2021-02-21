<?php

namespace Tonic;

/**
 * Base exception class for Tonic exceptions
 */
class Exception extends \Exception
{
    public static $escapeFn = null;

    protected $message = 'An unknown Tonic exception occurred';
    protected $code = 500;

    public static function escapeOutput($str)
    {
        if(self::$escapeFn) {
            return call_user_func(self::$escapeFn, $str);
        }
        return $str;
    }
}
