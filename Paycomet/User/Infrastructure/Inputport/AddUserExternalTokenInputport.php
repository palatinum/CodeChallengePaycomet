<?php

namespace Paycomet\User\Infrastructure\Inputport;

use Paycomet\User\Domain\User;
use Paycomet\User\Infrastructure\Outputport\Services\AddUserExternalTokenOutputport;

interface AddUserExternalTokenInputport
{
    /**
     * @param AddUserExternalTokenOutputport $addUserExternalTokenOutputport
     */
    public function __construct(AddUserExternalTokenOutputport $addUserExternalTokenOutputport);

    /**
     * @param User $user
     * @return User|null
     */
    public function __invoke(User $user): ?User;
}
