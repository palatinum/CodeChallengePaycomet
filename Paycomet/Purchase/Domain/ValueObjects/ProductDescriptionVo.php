<?php

namespace Paycomet\Purchase\Domain\ValueObjects;

use Paycomet\Shared\Domain\ValueObject\StringValueObject;

class ProductDescriptionVo extends StringValueObject
{
    public static function create (?string $value): ProductDescriptionVo
    {
        return new self($value);
    }
}
