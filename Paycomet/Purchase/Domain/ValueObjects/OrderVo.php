<?php

namespace Paycomet\Purchase\Domain\ValueObjects;

use Paycomet\Shared\Domain\ValueObject\StringValueObject;

class OrderVo extends StringValueObject
{
    public static function create (?string $value): OrderVo
    {
        return new self($value);
    }
}
