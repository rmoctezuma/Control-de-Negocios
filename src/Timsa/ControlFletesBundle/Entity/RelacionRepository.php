<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EconomicoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RelacionRepository extends EntityRepository
{
	public function filtrarRelaciones($numero){
		$query = "SELECT r FROM TimsaControlFletesBundle:Relacion r
											JOIN r.economico e
											WHERE e.numero LIKE  '%$numero%'";

		return $this->getEntityManager()
					->createQuery( $query )
					->getResult();
	}
}
