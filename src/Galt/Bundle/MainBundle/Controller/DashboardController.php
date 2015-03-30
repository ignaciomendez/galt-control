<?php

namespace Galt\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('GaltMainBundle:Default:main.html.twig');
    }
}
