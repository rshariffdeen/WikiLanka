<?php

namespace WikiLanka\Bundle\FacebookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function startAction($name)
    {
        return $this->render('WikiLankaFacebookBundle:Welcome:index.html.twig', array('name' => $name));
    }
}
