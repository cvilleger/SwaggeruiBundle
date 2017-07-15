<?php

namespace Cvilleger\SwaggeruiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $parameterName = 'swaggerui';
        $parameters = null;
        if ($this->container->hasParameter($parameterName)){
            /**
             * @var array $swaggerui
             * example: [
             *     title: 'SwaggeruiBundleProject',
             *     url: 'http://petstore.swagger.io/v2/swagger.json'
             * ]
             */
            $swaggerui = $this->container->getParameter($parameterName);
            foreach ($swaggerui as $value){
                $key = key($value);
                $parameters[$key] = $value[$key];
            }
        }

        return $this->render('CvillegerSwaggeruiBundle:Default:index.html.twig', $parameters);
    }
}
