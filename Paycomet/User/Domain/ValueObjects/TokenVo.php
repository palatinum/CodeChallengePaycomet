<?php

namespace Paycomet\User\Domain\ValueObjects;

use Paycomet\Shared\Domain\ValueObject\StringValueObject;

class TokenVo extends StringValueObject
{
    public static function create (?string $value): TokenVo
    {
        return new self($value);
    }
}

