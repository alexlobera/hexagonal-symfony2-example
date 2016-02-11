<?php

namespace Core\UseCase;

use Hexagonal\Core\Port\Input\RequestInterface;
use Hexagonal\Core\Port\Repository\UserRepositoryInterface;

class GetUserUseCase implements UseCaseInterface
{
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(RequestInterface $request)
    {
        return $this->userRepository->getUserById($request->get('id'));
    }
}
