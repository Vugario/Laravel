<?php

namespace App\Http\Admin\User\Controller;

use App\Http\Admin\Core\Controller\AdminController;
use Base\Component\User\Service\Contract\UserServiceInterface;

class UserController extends AdminController
{
    const URI = 'users';

    /**
     * @var UserServiceInterface
     */
    private $userService;

    public function initialize(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->findAll();

        return view('index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = $this->userService->findOneOrFailById($id);

        return view('show', ['user' => $user]);
    }
}
