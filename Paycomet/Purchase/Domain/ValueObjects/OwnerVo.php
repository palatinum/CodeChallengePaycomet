<?php

namespace Paycomet\Purchase\Domain\ValueObjects;

use Paycomet\Shared\Domain\ValueObject\StringValueObject;

class OwnerVo extends StringValueObject
{
    public static function create (?string $value): OwnerVo
    {
        return new self($value);
    }
}
