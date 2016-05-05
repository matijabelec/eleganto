<?php

$routes->group(['namespace' => 'app\controllers'], function($routes)
{
    $routes->get('/', 'IndexCtrl::welcome');
    
    $routes->methods(['GET', 'POST'], '/login', 'AuthCtrl::login', 'login');
});