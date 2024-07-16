<?php

namespace Paycomet\User\Application;

use Paycomet\User\Domain\User;
use Paycomet\User\Infrastructure\Inputport\AddUserExternalTokenInputport;
use Paycomet\User\Infrastructure\Outputport\Services\AddUserExternalTokenOutputport;

readonly class AddUserExternalTokenUseCase implements AddUserExternalTokenInputport
{
    /**
     * @param AddUserExternalTokenOutputport $addUserExternalToken
     */
    public function __construct(public AddUserExternalTokenOutputport $addUserExternalToken) {}

    /**
     * @param User $user
     * @return User|null
     */
    public function __invoke(User $user): ?User
    {
        return $this->addUserExternalToken->__invoke($user);
    }
}
