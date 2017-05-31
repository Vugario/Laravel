<?php

namespace Base\Component\User\Service\Contract;

use Illuminate\Database\Eloquent\ModelNotFoundException;

interface UserServiceInterface
{
    /**
     * @param int $id
     *
     * @return User
     *
     * @throws ModelNotFoundException
     */
    public function findOneOrFailById(int $id);

    /**
     * Returns all the users
     *
     * @return User[]
     */
    public function findAll();
}
