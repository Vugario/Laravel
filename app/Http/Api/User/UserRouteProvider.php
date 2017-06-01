<?php
namespace App\Http\Api\User;

use App\Http\Api\User\Controller\UserController;
use Illuminate\Routing\Router;

class UserRouteProvider
{
    public function register(Router $router)
    {
        $router->resource(UserController::URI, 'UserController', ['as' => 'api']);
    }
}
