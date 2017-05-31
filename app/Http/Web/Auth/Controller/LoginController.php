<?php

namespace App\Http\Web\Auth\Controller;

use App\Http\Web\Core\Controller\WebController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends WebController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function initialize()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
