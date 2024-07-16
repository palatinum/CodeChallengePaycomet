<?php

namespace Paycomet\User\Domain\ValueObjects;

use Paycomet\Shared\Domain\ValueObject\StringValueObject;

class OriginalipVo extends StringValueObject
{
    public static function create (string $value): OriginalipVo
    {
        return new self($value);
    }
}
