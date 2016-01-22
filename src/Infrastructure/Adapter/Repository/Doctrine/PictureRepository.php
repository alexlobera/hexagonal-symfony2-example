<?php

namespace Hexagonal\Infrastructure\Adapter\Repository\Doctrine;

use Hexagonal\Core\Port\Repository\UserRepositoryInterface;
use Hexagonal\Core\Entity\User;

class PictureRepository implements PictureRepositoryInterface
{
    protected $repository;

    public function __construct(\Doctrine\ORM\EntityRepository $repository)
     {
        $this->repository = $repository;
    }

    public function getPictureById($id)
    {
        return $this->repository->findOneById($id);
    }

    public function getPictureByUser(User $user)
    {
        return $this->repository->findByUser($user);
    }
}

