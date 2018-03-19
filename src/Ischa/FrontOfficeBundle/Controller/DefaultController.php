<?php

namespace Ischa\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IschaFrontOfficeBundle:Default:index.html.twig');
    }
}
