<?php

namespace Base\Framework\Routing\Contract;

use Illuminate\Routing\Router;

interface RouteProviderInterface
{
    public function register(Router $router);
}
