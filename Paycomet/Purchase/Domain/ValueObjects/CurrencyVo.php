<?php

namespace Paycomet\Purchase\Domain\ValueObjects;

use Paycomet\Shared\Domain\ValueObject\StringValueObject;

class CurrencyVo extends StringValueObject
{
    public static function create (?string $value): CurrencyVo
    {
        return new self($value);
    }
}
