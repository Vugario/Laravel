<?php

namespace Base\Framework\Routing;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Base\Framework\Routing\Contract\RouteProviderInterface;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * TODO: Implement route caching
     *
     * @param Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        foreach ($this->getProjects() as $project)
        {
            foreach ($this->getRouteProviders($project) as $routeProvider)
            {
                $options = $this->getRouteGroupOptions($project, $routeProvider);

                $router->group($options, function(Router $router) use ($routeProvider)
                {
                    app()->make($routeProvider)->register($router);
                });
            }
        }
    }

    /**
     * Returns all the keys of the enabled projects as an array
     *
     * @return array
     */
    private function getProjects()
    {
        return config('projects');
    }

    /**
     * Returns an array of all the route providers for the given project
     *
     * @param string $project
     *
     * @return RouteProviderInterface[]
     */
    private function getRouteProviders(string $project)
    {
        return config("{$project}.routes");
    }

    /**
     * Returns the options for a route group
     *
     * @param string $project
     * @param string $routeProvider
     *
     * @return array
     */
    private function getRouteGroupOptions(string $project, string $routeProvider)
    {
        return [
            'prefix'    => $this->getPrefix($project),
            'namespace' => $this->getNamespace($routeProvider),
        ];
    }

    /**
     * Returns the prefix for the given project
     * All projects are prefixed except for the "web" project
     *
     * @param string $project
     *
     * @return string|null
     */
    private function getPrefix(string $project)
    {
        if ($project === 'web')
        {
            return null;
        }

        return $project;
    }

    /**
     * Returns the namespace for all controllers of the given route provider
     *
     * @param string $routeProvider
     *
     * @return string
     */
    private function getNamespace(string $routeProvider)
    {
        return preg_replace('/([a-z]+)$/i', 'Controller', $routeProvider);
    }
}
