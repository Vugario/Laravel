<?php

namespace Base\Component\Venue;

use Illuminate\Support\ServiceProvider;
use Base\Component\Venue\Service\Contract\VenueServiceInterface;
use Base\Component\Venue\Service\VenueService;

class VenueServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VenueServiceInterface::class, VenueService::class);
    }
}
