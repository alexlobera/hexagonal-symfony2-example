<?php

namespace Core\UseCase;

use Core\Ports\Input\RequestInterface;
use Core\Ports\Repository\UserRepositoryInterface;

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
