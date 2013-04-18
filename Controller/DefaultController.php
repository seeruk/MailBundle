<?php

namespace Cyclone\Component\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CycloneComponentMailBundle:Default:index.html.twig', array('name' => $name));
    }
}
