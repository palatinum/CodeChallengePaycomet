<?php

namespace Paycomet\Shared\Domain\ValueObject;

abstract class IntValueObject
{
    private int $value;

    /**
     * @param int $value
     */
    public function __construct(int $value) {
        $this->value = $value;
    }

    /**
     * @return int
     */
    final public function value(): int
    {
        return $this->value;
    }
}
