<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * OperadorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TipoViajeRepository extends EntityRepository
{
	public function getTipoViaje($viaje, $trafico){
		return $this->getEntityManager()
					->createQuery("SELECT t FROM TimsaControlFletesBundle:TipoViaje t
											WHERE 
											t.trafico = $trafico
											and 
											t.viaje = $viaje ")
					->getResult();
	}

}
