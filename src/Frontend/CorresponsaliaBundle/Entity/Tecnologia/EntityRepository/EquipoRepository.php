<?php

namespace Frontend\CorresponsaliaBundle\Entity\Tecnologia\EntityRepository;
use Doctrine\ORM\EntityRepository;

/**
 * Description of EquipoRepository
 *
 * @author ecastro
 */
class EquipoRepository extends EntityRepository{
 
    public function findByMarcaId($marca_id){
        $query = $this->getEntityManager()->createQuery("
            SELECT modelo
            FROM CorresponsaliaBundle:Tecnologia\Modelo modelo
            LEFT JOIN modelo.marca marca
            WHERE marca.id = :marca_id
        ")->setParameter('marca_id', $marca_id);

        return $query->getArrayResult();
    }

}