<?php

namespace app\controllers;

use mako\http\routing\Controller;
use mako\view\ViewFactory;
use mako\auth\Gatekeeper;

/**
 * Account controller.
 */
class Account extends Controller
{
    public function home(ViewFactory $view)
    {
        if($this->gatekeeper->isGuest() ) {
            return $this->response->redirect($this->urlBuilder->toRoute('login') );
        }
        
        $messages = $this->session->getFlash('messages');
        return $view->create('account.home', ['errors' => $messages]);
    }
}
