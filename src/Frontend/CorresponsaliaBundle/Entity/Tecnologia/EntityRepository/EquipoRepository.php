<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia\EntityRepository;
use Doctrine\ORM\EntityRepository;

/**
 * Description of EquipoRepository
 *
 * @author ecastro
 */
class EquipoRepository extends EntityRepository{
    //put your code here
    
    /**
     * 
     */
    public function findEquipoId() {
        return $this->getEntityManager()
                    ->createQuery(
                        'SELECT p FROM AcmeStoreBundle:Product p ORDER BY p.name ASC'
                    )
                    ->getResult();
        
//        $em = $this->getEntityManager();
//        $consulta = $em->createQuery('SELECT r FROM DistribucionBundle:Representante r WHERE
//        r.operador = :idoperador order by r.id ASC');
//        $consulta->setParameter('idoperador', $idoperador);
//        return $consulta->getResult();
    }
}
