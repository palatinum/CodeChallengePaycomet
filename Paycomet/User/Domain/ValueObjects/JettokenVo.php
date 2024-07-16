<?php

namespace Paycomet\User\Domain\ValueObjects;

use Paycomet\Shared\Domain\ValueObject\StringValueObject;

class JettokenVo extends StringValueObject
{
    public static function create (string $value): JettokenVo
    {
        return new self($value);
    }
}
