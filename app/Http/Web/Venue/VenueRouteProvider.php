<?php
namespace App\Http\Web\Venue;

use App\Http\Web\Venue\Controller\VenueController;
use Illuminate\Routing\Router;

class VenueRouteProvider
{
    public function register(Router $router)
    {
        $router->resource(VenueController::URI, 'VenueController', ['as' => 'web']);
    }
}
