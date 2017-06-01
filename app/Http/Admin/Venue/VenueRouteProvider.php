<?php
namespace App\Http\Admin\Venue;

use App\Http\Admin\Venue\Controller\VenueController;
use Illuminate\Routing\Router;

class VenueRouteProvider
{
    public function register(Router $router)
    {
        $router->resource(VenueController::URI, 'VenueController', ['as' => 'admin']);
    }
}
