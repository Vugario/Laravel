<?php

namespace App\Http\Api\User\Controller;

use App\Http\Api\Core\Controller\ApiController;
use Base\Component\User\Service\Contract\UserServiceInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends ApiController
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
        return $this->userService->findAll();
    }

    public function show($id)
    {
        try
        {
            return $this->userService->findOneOrFailById($id);
        }
        catch (ModelNotFoundException $e)
        {
            return response()->json("A user with id ${id} does not exist");
        }
    }
}
