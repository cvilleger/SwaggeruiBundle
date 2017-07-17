<?php

namespace Cvilleger\SwaggeruiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $parameterName = 'swaggerui';
        $parameters = [];
        if ($this->container->hasParameter($parameterName)){
            $swaggerui = $this->container->getParameter($parameterName);
            foreach ($swaggerui as $value){
                $key = key($value);
                $parameters[$key] = $value[$key];
            }
        }

        if (!empty($parameters['url'])){
            // If not https://..., http://..., or //...
            if (0 === preg_match('/^(https?:)?\/\//', $parameters['url'])) {
                // interpret as route-name.
                $parameters['url'] = rtrim($this->generateUrl($parameters['url']), '/');
            }
        }

        return $this->render('CvillegerSwaggeruiBundle:Default:index.html.twig', $parameters);
    }
}
