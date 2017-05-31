<?php
namespace App\Http\Admin\User;

use App\Http\Admin\User\Controller\UserController;
use Illuminate\Routing\Router;

class UserRouteProvider
{
    public function register(Router $router)
    {
        $router->get(UserController::URI, 'UserController@index');
    }
}
