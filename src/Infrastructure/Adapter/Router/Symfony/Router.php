<?php

namespace Hexagonal\Infrastructure\Adapters\Router\Symfony;

use Hexagonal\Core\Ports\Router\RouterInterface;

class Router implements RouterInterface
{
    protected $router;

    public function __construct(\Symfony\Component\Routing\Router $router)
    {
        $this->router = $router;
    }

    public function generate($name, $parameters, $referenceType)
    {
        return $this->router->generate($name, $parameters, $referenceType);
    }
}
