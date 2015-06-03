<?php

class Locale
{
    private static $default = 'en';

    public static function getDefault()
    {
        return self::$default;
    }

    public function setDefault($default)
    {
        self::$default = $default;
    }

    public static function parseLocale($locale)
    {
        return [];
    }
}