<?php

namespace Base\Component\User\Service;

use Base\Component\User\Model\User;
use Base\Component\User\Service\Contract\UserServiceInterface;

class UserService implements UserServiceInterface
{
    /**
     * @inheritdoc
     */
    public function findOneOrFailById(int $id)
    {
        return User::findOrFail($id);
    }

    /**
     * @inheritdoc
     */
    public function findAll()
    {
        return User::all();
    }
}
