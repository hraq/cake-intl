<?php

if (!extension_loaded('intl')) {
    $path = realpath(__DIR__.'../../src/Lib');
    $items = [
        'Locale',
        'MessageFormatter',
        'IntlDateFormatter',
        'NumberFormatter',
    ];

    foreach ($items as $item) {
        require_once "{$path}/{$item}.php";
    }
}



