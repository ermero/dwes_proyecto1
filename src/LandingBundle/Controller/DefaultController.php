<?php

namespace LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LandingBundle:Default:index.html.twig');
    }

    public function productoAction($valor)
    {
    	if($valor==1){

    		  return $this->render('LandingBundle:Default:producto1.html.twig');
    	}else{

    		return $this->render('LandingBundle:Default:producto2.html.twig');

    	}
      
    }

}
