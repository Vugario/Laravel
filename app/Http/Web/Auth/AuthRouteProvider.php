<?php

namespace App\Http\Web\Auth;

use Illuminate\Routing\Router;

class AuthRouteProvider
{
    public function register(Router $router)
    {
        $router->get('login', 'LoginController@showLoginForm')->name('login');
        $router->post('login', 'LoginController@login');
        $router->post('logout', 'LoginController@logout')->name('logout');

        // Registration Routes...
        $router->get('register', 'RegisterController@showRegistrationForm')->name('register');
        $router->post('register', 'RegisterController@register');

        // Password Reset Routes...
        $router->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $router->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $router->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        $router->post('password/reset', 'ResetPasswordController@reset');
    }
}
