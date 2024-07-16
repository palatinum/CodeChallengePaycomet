<?php

namespace Paycomet\Purchase\Infrastructure\Inputport;

use Paycomet\Purchase\Domain\Purchase;
use Paycomet\Purchase\Infrastructure\Outputport\Services\ExecutePurchaseOutputport;

interface ExecutePurchaseInputport
{
    /**
     * @param ExecutePurchaseOutputport $executePurchase
     */
    public function __construct(ExecutePurchaseOutputport $executePurchase);
    /**
     * @param Purchase $purchase
     * @return Purchase
     */
    public function __invoke(Purchase $purchase) : Purchase;
}
