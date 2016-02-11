<?php

namespace Hexagonal\Infrastructure\Adapter\Mock;

use Hexagonal\Core\Port\Repository\UserRepositoryInterface;
use Hexagonal\Core\Entity\User;

class PictureRepository implements PictureRepositoryInterface
{
    public function getUserById($id)
    {
        $user = new User;
        $user->setId(1);
        $user->setName('John Doe');

        return $user;
    }
}

