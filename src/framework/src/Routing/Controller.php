<?php

namespace Base\Framework\Routing;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Construct the new controller
     */
    public function __construct()
    {
        $this->initialization();
        $this->registerViewPath();
    }

    /**
     * __construct() does not have the Auth session available (changed since Laravel 5.3)
     * Therefore we call the initialize within the middleware
     */
    private function initialization()
    {
        $this->middleware(function ($request, $next) {
            // Call the initializer with injection
            if (method_exists($this, 'initialize'))
            {
                App::call([$this, 'initialize']);
            }

            return $next($request);
        });
    }

    /**
     * Register a new view path based on the
     * current project and resource
     */
    private function registerViewPath()
    {
        list($app, $http, $project, $resource, $controller) = explode('\\', static::class, 5);

        // Add a core namespace
        View::addNamespace('core', app_path("Http/${project}/Core/Resources/views"));

        // Add the project-resource location
        View::addLocation(app_path("Http/${project}/{$resource}/Resources/views"));
    }
}
