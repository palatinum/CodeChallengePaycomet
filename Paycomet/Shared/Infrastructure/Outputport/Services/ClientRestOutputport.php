<?php

namespace Paycomet\Shared\Infrastructure\Outputport\Services;

use Paycomet\Purchase\Domain\Purchase;

interface ClientRestOutputport
{
    /**
     * @param Purchase $purchase
     * @return Purchase|null
     */
    public function executePurchase(Purchase $purchase): ?Purchase;
}
