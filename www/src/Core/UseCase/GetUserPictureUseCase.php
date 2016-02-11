<?php

namespace Core\UseCase;

use Hexagonal\Core\Port\Input\RequestInterface;
use Hexagonal\Core\Port\Repository\UserRepositoryInterface;

class GetUserPictureUseCase implements UseCaseInterface
{
	$router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function execute(RequestInterface $request)
    {
        return $this->userRepository->getUserById($request->get('user'));
    }
}
