<?php

namespace Galt\Bundle\TicketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SupportController extends Controller
{
    public function indexAction()
    {
        return $this->render('GaltTicketBundle:Support:dashboard.html.twig');
    }
}
