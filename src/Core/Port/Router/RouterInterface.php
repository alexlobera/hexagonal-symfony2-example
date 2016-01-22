<?php

namespace Hexagonal\Core\Port\Router;

interface RouterInterface
{

    public function generate($name, $parameters, $referenceType);

}
