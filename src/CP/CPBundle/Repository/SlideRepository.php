<?php

namespace CP\CPBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * RepresentationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SlideRepository extends EntityRepository
{
    public function getNumberEntities()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u');

        return count($qb->getQuery()->getResult());
    }
}
