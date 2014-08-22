<?php

namespace Club\UtilidadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UtilidadBundle:Default:index.html.twig', array('name' => $name));
    }
}
