<?php

namespace Paycomet\User\Infrastructure\Inputport;

use Paycomet\User\Domain\User;

interface CreateUserInputport
{
    /**
     * @param string $jetJetToken
     * @param string $ip
     * @param string|null $identification
     * @param string|null $token
     * @return User
     */
    public function __invoke(
        string  $jetJetToken,
        string  $ip,
        ?string $identification,
        ?string $token,
    ): User;
}
