<?php

namespace Paycomet\User\Infrastructure\Outputport\Services;

use Paycomet\Shared\Infrastructure\Outputport\Services\ClientSoapOutputport;
use Paycomet\User\Domain\User;

interface AddUserExternalTokenOutputport
{
    /**
     * @param ClientSoapOutputport $client
     */
    public function __construct(ClientSoapOutputport $client);

    /**
     * @param User $user
     * @return User
     */

    public function __invoke(User $user): User;
}
