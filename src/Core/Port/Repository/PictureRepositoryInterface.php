<?php

namespace Hexagonal\Core\Port\Repository;

use Hexagonal\Core\Entity\User;

interface PictureRepositoryInterface
{

    public function getPictureById($id);

    public function getPicturesByUser(User $user);

}