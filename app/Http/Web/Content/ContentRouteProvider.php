<?php
namespace App\Http\Web\Content;

use Illuminate\Routing\Router;

class ContentRouteProvider
{
    public function register(Router $router)
    {
        $router->get('/', 'ContentController@index');
    }
}
