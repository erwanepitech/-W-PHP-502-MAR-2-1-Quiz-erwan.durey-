<?php

namespace App\Repository;

use App\Entity\LogUser;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<LogUser>
 *
 * @method LogUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method LogUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method LogUser[]    findAll()
 * @method LogUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LogUser::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(LogUser $entity, bool $flush = false): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(LogUser $entity, bool $flush = false): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function get_unique_visitor()
    {
        $entityManager = $this->getEntityManager();
        
        $sql = 'SELECT count(DISTINCT u.log_user) as Unique_visit
        FROM App\Entity\LogUser u';
        $query = $entityManager->createQuery($sql);
        $result = $query->getResult();

        return $result;
    }
}
