<?php

namespace Paycomet\User\Infrastructure\Outputadapter\Services;

use Paycomet\Shared\Infrastructure\Outputport\Services\ClientSoapOutputport;
use Paycomet\User\Domain\User;
use Paycomet\User\Infrastructure\Outputport\Services\AddUserExternalTokenOutputport;

readonly class AddUserExternalTokenOutputadapter implements AddUserExternalTokenOutputport
{
    /**
     * @param ClientSoapOutputport $client
     */
    public function __construct(public ClientSoapOutputport $client) {}

    /**
     * @param User $user
     * @return User
     */
    public function __invoke(User $user): User
    {
        return $this->client->addUserToken($user);
    }
}
