<?php

namespace Paycomet\Purchase\Infrastructure\Outputadapter\Services;

use Paycomet\Purchase\Domain\Purchase;
use Paycomet\Purchase\Infrastructure\Outputport\Services\ExecutePurchaseOutputport;
use Paycomet\Shared\Infrastructure\Outputport\Services\ClientRestOutputport;

class ExecutePurchaseOutputadapter implements ExecutePurchaseOutputport
{
    /**
     * @param ClientRestOutputport $client
     */
    public function __construct(public ClientRestOutputport $client) {}

    /**
     * @param Purchase $purchase
     * @return Purchase
     */
    public function __invoke(Purchase $purchase): Purchase
    {
        return $this->client->executePurchase($purchase);
    }
}
