<?php

namespace Paycomet\Purchase\Domain\ValueObjects;

use Paycomet\Shared\Domain\ValueObject\StringValueObject;

class ChallengeUrlVo extends StringValueObject
{
    public static function create (?string $value): ChallengeUrlVo
    {
        return new self($value);
    }
}
