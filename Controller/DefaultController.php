<?php

namespace Cvilleger\SwaggeruiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CvillegerSwaggeruiBundle:Default:index.html.twig');
    }
}
