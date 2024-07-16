<?php

namespace Paycomet\User\Application;

use Paycomet\User\Domain\User;
use Paycomet\User\Domain\ValueObjects\IdentificationVo;
use Paycomet\User\Domain\ValueObjects\JettokenVo;
use Paycomet\User\Domain\ValueObjects\OriginalipVo;
use Paycomet\User\Domain\ValueObjects\TokenVo;
use Paycomet\User\Infrastructure\Inputport\CreateUserInputport;

readonly class CreateUserUseCase implements CreateUserInputport
{
    /**
     * @param string $jetToken
     * @param string $ip
     * @param string|null $identification
     * @param string|null $token
     * @return User
     */
    public function __invoke(
        string      $jetToken,
        string      $ip,
        ?string     $identification,
        ?string     $token,
    ): User
    {
        return User::create(
            JettokenVo::create($jetToken),
            OriginalipVo::create($ip),
            IdentificationVo::create($identification),
            TokenVo::create($token),
        );
    }
}
