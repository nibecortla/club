<?php

//namespace Club\ClubsBundle\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//
//class DefaultController extends Controller
//{
//    public function ayudaAction($name)
//    {
//        return $this->render('ClubsBundle:Default:index.html.twig', array('name' => $name));
//    }
//}

namespace Club\ClubsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function ayudaAction()
    {
//        return new Response('Ayuda');
        return $this->render('ClubsBundle:Default:ayuda.html.twig');
    }
}