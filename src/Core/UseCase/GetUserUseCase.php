<?php

namespace Core\UseCase;

use Hexagonal\Core\Port\Input\RequestInterface;
use Hexagonal\Infrastructure\Adapter\Repository\Doctrine\UserRepository;

class GetUserUseCase implements UseCaseInterface
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(RequestInterface $request)
    {
        return $this->userRepository->getUserById($request->get('id'));
    }
}
