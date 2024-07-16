<?php

namespace Paycomet\Purchase\Infrastructure\Inputport;

use Paycomet\Purchase\Domain\Purchase;
use Paycomet\User\Domain\User;

interface CreatePurchaseInputport
{
    /**
     * @param User $user
     * @param string $amount
     * @param string $order
     * @param string $currency
     * @param string $productDescription
     * @param string $owner
     * @param string|null $challengeUrl
     * @return Purchase
     */
    public function __invoke(
        User $user,
        string $amount,
        string $order,
        string $currency,
        string $productDescription,
        string $owner,
        ?string $challengeUrl,
    ) : Purchase;
}
