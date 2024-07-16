<?php

namespace Paycomet\Shared\Infrastructure\Outputadapter\Paycomet;

use Paycomet\User\Domain\User;

interface ClientSoapInterface
{
    /**
     * @param User $user
     * @return User|null
     */
    public function addUserToken (User $user) : ?User;
}
