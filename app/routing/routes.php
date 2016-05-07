<?php

$routes->group(['namespace' => 'app\controllers'], function($routes)
{
    $routes->get('/', 'Index::welcome', 'welcome');
    
    $routes->methods(['GET', 'POST'], '/login', 'Auth::login', 'login');
    $routes->post('/auth/logout', 'Auth::logout', 'auth_logout');
    $routes->post('/auth/login_check', 'Auth::checkLogin', 'login_check');
    
    $routes->get('/home', 'Account::home', 'home');
});
