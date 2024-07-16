<?php

namespace Paycomet\Purchase\Application;

use Paycomet\Purchase\Domain\Purchase;
use Paycomet\Purchase\Infrastructure\Inputport\ExecutePurchaseInputport;
use Paycomet\Purchase\Infrastructure\Outputport\Services\ExecutePurchaseOutputport;

class ExecutePurchaseUseCase implements ExecutePurchaseInputport
{
    /**
     * @param ExecutePurchaseOutputport $executePurchase
     */
    public function __construct(
        public ExecutePurchaseOutputport $executePurchase
    )
    {
    }

    /**
     * @param Purchase $purchase
     * @return Purchase
     */
    public function __invoke(Purchase $purchase): Purchase
    {
        return $this->executePurchase->__invoke($purchase);
    }
}
