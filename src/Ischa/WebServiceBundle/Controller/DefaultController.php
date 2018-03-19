<?php

namespace Ischa\WebServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IschaWebServiceBundle:Default:index.html.twig');
    }
}
