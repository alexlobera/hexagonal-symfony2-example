<?php

namespace Hexagonal\Infrastructure\Adapter\Mock;

use Hexagonal\Core\Port\Repository\UserRepositoryInterface;
use Hexagonal\Core\Entity\User;
use Hexagonal\Core\Entity\Picture;

class PictureRepository implements PictureRepositoryInterface
{
    public function getPictureById($id)
    {
        $picture = new Picture;
        $picture->setId(1);
        $picture->setTitle('A title');
        $picture->setUserId(1);

        return $user;
    }

    public function getPictureByUser(User $user)
    {
        $picture = new Picture;
        $picture->setId(1);
        $picture->setTitle('A title');
        $picture->setUserId($user->getId());

        return [$picture];
    }
}

