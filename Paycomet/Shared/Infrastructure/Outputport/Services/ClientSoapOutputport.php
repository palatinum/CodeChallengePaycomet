<?php

namespace Paycomet\Shared\Infrastructure\Outputport\Services;

use Paycomet\Purchase\Domain\Purchase;
use Paycomet\User\Domain\User;

interface ClientSoapOutputport
{
    /**
     * @param User $user
     * @return User|null
     */
    public function addUserToken(User $user) : ?User;
}
