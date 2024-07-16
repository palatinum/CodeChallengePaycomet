<?php

namespace Paycomet\Purchase\Application;

use Paycomet\Purchase\Domain\ValueObjects\AmountVo;
use Paycomet\Purchase\Domain\ValueObjects\ChallengeUrlVo;
use Paycomet\Purchase\Domain\ValueObjects\CurrencyVo;
use Paycomet\Purchase\Domain\ValueObjects\OrderVo;
use Paycomet\Purchase\Domain\ValueObjects\OwnerVo;
use Paycomet\Purchase\Domain\ValueObjects\ProductDescriptionVo;
use Paycomet\Purchase\Domain\Purchase;
use Paycomet\Purchase\Infrastructure\Inputport\CreatePurchaseInputport;
use Paycomet\User\Domain\User;

class CreatePurchaseUseCase implements CreatePurchaseInputport
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
        ?string $challengeUrl
    ): Purchase
    {
        return Purchase::create(
            $user,
            AmountVo::create($amount),
            OrderVo::create($order),
            CurrencyVo::create($currency),
            ProductDescriptionVo::create($productDescription),
            OwnerVo::create($owner),
            ChallengeUrlVo::create($challengeUrl)
        );
    }
}
