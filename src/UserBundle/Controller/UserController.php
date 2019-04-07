<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function loginAction(){
        $tokenProvider = $this->container->get('security.csrf.token_manager');
        $token = $tokenProvider->getToken('example')->getValue();
        //die($token);
        return $this->render('@FOSUser/Security/login.html.twig',['csrf_token'=>$token]);
    }
}
