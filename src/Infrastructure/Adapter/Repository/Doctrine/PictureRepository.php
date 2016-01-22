<?php

namespace Hexagonal\Infrastructure\Adapter\Repository\Doctrine;

use Hexagonal\Core\Port\Repository\UserRepositoryInterface;

class PictureRepository implements PictureRepositoryInterface
{
    protected $repository;

    public function __construct(\Doctrine\ORM\EntityRepository $repository)
     {
        $this->repository = $repository;
    }

    public function getUserById($id)
    {
        return $this->repository->findOneById($id);
    }
}

