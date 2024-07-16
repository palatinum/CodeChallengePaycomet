<?php

namespace Paycomet\Purchase\Domain\ValueObjects;

use Paycomet\Shared\Domain\ValueObject\StringValueObject;

class AmountVo extends StringValueObject
{
    public static function create (string $value): AmountVo
    {
        return new self($value);
    }
}
