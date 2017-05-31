<?php

namespace Base\Component\User;

use Illuminate\Support\ServiceProvider;
use Base\Component\User\Service\Contract\UserServiceInterface;
use Base\Component\User\Service\UserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);
    }
}
