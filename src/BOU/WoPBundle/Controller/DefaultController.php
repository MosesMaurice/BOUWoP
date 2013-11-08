<?php

namespace BOU\WoPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BOUWoPBundle:Default:index.html.twig');
    }
}
