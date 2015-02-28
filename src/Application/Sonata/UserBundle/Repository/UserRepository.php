<?php

namespace Application\Sonata\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;


class UserRepository extends EntityRepository
{
    public function getNumberUsers($clan)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.clan = :clan')
            ->setParameter('clan', $clan);

        return count($qb->getQuery()->getResult());
    }


}
