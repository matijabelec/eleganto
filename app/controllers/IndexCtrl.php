<?php

namespace app\controllers;

use mako\http\routing\Controller;
use mako\view\ViewFactory;

/**
 * Welcome controller.
 */
class IndexCtrl extends Controller
{
    /**
     * Welcome route.
     *
     * @access  public
     * @param   \mako\view\ViewFactory  $view  View factory
     * @return  string
     */
    public function welcome(ViewFactory $view)
    {
        return $this->response->redirect($this->urlBuilder->toRoute('login') );
    }
}