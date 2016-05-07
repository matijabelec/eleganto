<?php

$routes->group(['namespace' => 'app\controllers'], function($routes)
{
    $routes->get('/', 'IndexCtrl::welcome');
    
    $routes->methods(['GET', 'POST'], '/login', 'AuthCtrl::login', 'login');
    $routes->methods(['GET', 'POST'], '/logout', 'AuthCtrl::logout', 'logout');
    $routes->methods(['POST'], '/auth/login_check', 'AuthCtrl::checkLogin', 'login_check');
});
