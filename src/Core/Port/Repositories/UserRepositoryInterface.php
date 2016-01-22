<?php

namespace Hexagonal\Core\Ports\Repositories;

interface UserRepositoryInterface
{

    public function getUserById($id);

}