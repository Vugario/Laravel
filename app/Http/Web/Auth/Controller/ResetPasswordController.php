<?php

namespace App\Http\Web\Auth\Controller;

use App\Http\Web\Core\Controller\WebController;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends WebController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function initialize()
    {
        $this->middleware('guest');
    }
}
