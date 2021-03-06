<?php

namespace PhillPrice\ResumeBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EducationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EducationRepository extends EntityRepository
{
	public function findAllOrderedByDate()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT e FROM PhillPriceResumeBundle:Education e ORDER BY e.graduated ASC, e.end_date DESC'
            )
            ->getResult();
    }
}
