<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClienteController extends Controller{

	public function indexAction(){
		return $this->render("TimsaControlFletesBundle:Operador:operadores.html.twig");
	}
}