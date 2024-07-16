<?php

namespace Paycomet\Shared\Infrastructure\Outputadapter\Paycomet\Rest;

use Paycomet\Purchase\Domain\Purchase;
use Paycomet\Shared\Infrastructure\Outputport\Services\ClientRestOutputport;

class ClientRestOutputadapter implements ClientRestOutputport
{
    /**
     * @param RestClientSoap $restClient
     */
    public function __construct(public RestClientSoap $restClient){}

    /**
     * @param Purchase $purchase
     * @return Purchase|null
     */
    public function executePurchase(Purchase $purchase): ?Purchase
    {
        return $this->restClient->executePurchase($purchase);
    }
}
