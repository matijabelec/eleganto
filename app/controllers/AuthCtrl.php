<?php

namespace app\controllers;

use mako\http\routing\Controller;
use mako\view\ViewFactory;
use mako\auth\Gatekeeper;

/**
 * Auth controller.
 */
class AuthCtrl extends Controller
{
    // rules for login form
    private $rules = [
        '*'        => ['required'],
        'username' => ['min_length:4', 'max_length:60'],
        'password'    => ['min_length:6'],
    ];
    
    public function login(ViewFactory $view)
    {
        $messages = $this->session->getFlash('messages');
        return $view->create('security.login', ['errors' => $messages]);
    }
    
    public function checkLogin()
    {
        $post = $this->request->post();
        $validator = $this->validator->create($post, $this->rules);
        if($validator->isValid() ) {
            $loginStatus = $this->gatekeeper->login($post['username'], $post['password']);
            if($loginStatus === true) {
                return $this->response->redirect($this->urlBuilder->toRoute('home') );
            }
            
            // an error with entered data
            $errorMessage = 'error';
            switch($loginStatus) {
                case Gatekeeper::LOGIN_BANNED: $errorMessage = 'Your account is banned!'; break;
                case Gatekeeper::LOGIN_ACTIVATING: $errorMessage = 'Account is not yet activated!'; break;
                case Gatekeeper::LOGIN_INCORRECT: $errorMessage = 'Incorrect account data entered!'; break;
                case Gatekeeper::LOGIN_LOCKED: $errorMessage = 'Account is locked!'; break;
            }
            $this->session->putFlash('messages', $errorMessage);
            return $this->response->redirect($this->urlBuilder->toRoute('login') );
        }
        $this->session->putFlash('messages', 'Invalid data entered!');
        return $this->response->redirect($this->urlBuilder->toRoute('login') );
    }
    
    public function logout(ViewFactory $view)
    {
        if($this->gatekeeper->isLoggedIn() ) {
            $this->gatekeeper->logout();
            $this->session->putFlash('messages', 'Successfully logged out!');
        }
        return $this->response->redirect($this->urlBuilder->toRoute('login') );
    }
}
