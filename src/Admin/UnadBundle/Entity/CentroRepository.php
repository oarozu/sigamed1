<?php

namespace Admin\UnadBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CentroRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CentroRepository extends EntityRepository
{
    
public function ordenZona(){
     $em = $this->getEntityManager(); 
    // $centros = $em->getRepository('AdminUnadBundle:Centro')->findAll();
     $query = $em->createQuery('SELECT a FROM AdminUnadBundle:Centro a ORDER BY a.zona ASC');
     $centros = $query->getResult(); 
     return $centros;        
  }
}
