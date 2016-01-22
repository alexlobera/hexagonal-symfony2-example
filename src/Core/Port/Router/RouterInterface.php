<?php

namespace Core\Ports\Router;

interface RouterInterface
{

    public function generate($name, $parameters, $referenceType);

}
