<?php

namespace app\controllers;

use mako\http\routing\Controller;
use mako\view\ViewFactory;

/**
 * Auth controller.
 */
class AuthCtrl extends Controller
{
    public function login(ViewFactory $view)
    {
        return $view->create('security.login');
    }
}