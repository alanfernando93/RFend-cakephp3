<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'ViewCoreBusiness',
    ['path' => '/view-core-business'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
    }    
);