<?php
use Cake\Routing\Router;

Router::plugin('CakeIntl', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
