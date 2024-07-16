<?php

namespace Paycomet\User\Domain\ValueObjects;

use Paycomet\Shared\Domain\ValueObject\StringValueObject;

class IdentificationVo extends StringValueObject
{
    public static function create (?string $value): IdentificationVo
    {
        return new self($value);
    }
}
