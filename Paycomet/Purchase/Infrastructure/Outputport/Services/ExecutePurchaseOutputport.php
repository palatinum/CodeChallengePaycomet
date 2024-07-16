<?php

namespace Paycomet\Purchase\Infrastructure\Outputport\Services;

use Paycomet\Purchase\Domain\Purchase;
use Paycomet\Shared\Infrastructure\Outputport\Services\ClientRestOutputport;

interface ExecutePurchaseOutputport
{
    /**
     * @param ClientRestOutputport $client
     */
    public function __construct(ClientRestOutputport $client);


    /**
     * @param Purchase $purchase
     * @return Purchase
     */
    public function __invoke(Purchase $purchase): Purchase;
}
