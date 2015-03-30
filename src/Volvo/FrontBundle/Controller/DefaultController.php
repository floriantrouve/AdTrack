<?php

namespace Volvo\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VolvoFrontBundle:Default:index.html.twig');
    }
}
