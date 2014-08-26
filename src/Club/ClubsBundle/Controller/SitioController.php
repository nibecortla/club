<?php

namespace Club\ClubsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitioController extends Controller
{
    public function estaticaAction($pagina)
    {
        return $this->render('ClubsBundle:Sitio:'.$pagina.'.html.twig');
    }
}
