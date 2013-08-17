<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * OperadorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OperadorRepository extends EntityRepository
{
	public function getOperadoresLibres(){
		return $this->getEntityManager()
					->createQuery("SELECT p FROM TimsaControlFletesBundle:Operador p 
											WHERE p.actividad = 'Libre' ")
					->getResult();
	}

	public function getOperadoresOcupados(){
		return $this->getEntityManager()
					->createQuery("SELECT p FROM TimsaControlFletesBundle:Operador p 
											WHERE p.actividad = 'Ocupado' ")
					->getResult();
	}
}
