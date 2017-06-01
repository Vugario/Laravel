<?php
namespace App\Http\Api\Venue;

use App\Http\Api\Venue\Controller\VenueController;
use Illuminate\Routing\Router;

class VenueRouteProvider
{
    public function register(Router $router)
    {
        $router->resource(VenueController::URI, 'VenueController', ['as' => 'api']);
    }
}
