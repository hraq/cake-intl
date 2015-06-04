<?php

class Locale
{
    private static $default = 'en_US';

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
        return [
            'language' => self::getDefault(),
            'region'   => null,
        ];
    }
}