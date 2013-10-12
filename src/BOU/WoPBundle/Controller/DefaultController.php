<?php

namespace BOU\WoPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BOUWoPBundle:Default:index.html.twig', array('name' => $name));
    }
}
