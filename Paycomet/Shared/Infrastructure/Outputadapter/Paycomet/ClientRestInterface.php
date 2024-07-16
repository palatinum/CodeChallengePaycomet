<?php

namespace Paycomet\Shared\Infrastructure\Outputadapter\Paycomet;

use Paycomet\Purchase\Domain\Purchase;

interface ClientRestInterface
{
    /**
     * @param Purchase $purchase
     * @return Purchase|null
     */
    public function executePurchase(Purchase $purchase): ?Purchase;
}
