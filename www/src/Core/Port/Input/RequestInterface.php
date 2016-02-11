<?php

namespace Hexagonal\Core\Port\Input;

interface RequestInterface
{
    public function get($key);
}