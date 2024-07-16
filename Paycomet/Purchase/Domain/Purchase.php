<?php

namespace Paycomet\Purchase\Domain;

use Paycomet\Purchase\Domain\ValueObjects\AmountVo;
use Paycomet\Purchase\Domain\ValueObjects\ChallengeUrlVo;
use Paycomet\Purchase\Domain\ValueObjects\CurrencyVo;
use Paycomet\Purchase\Domain\ValueObjects\OrderVo;
use Paycomet\Purchase\Domain\ValueObjects\OwnerVo;
use Paycomet\Purchase\Domain\ValueObjects\ProductDescriptionVo;
use Paycomet\User\Domain\User;

class Purchase
{
    /**
     * @param User $user
     * @param AmountVo $amount
     * @param OrderVo $order
     * @param CurrencyVo $currency
     * @param ProductDescriptionVo $productDescription
     * @param OwnerVo $owner
     * @param ChallengeUrlVo $challengeUrl
     */
    public function __construct(
        private User $user,
        private AmountVo $amount,
        private OrderVo $order,
        private CurrencyVo $currency,
        private ProductDescriptionVo $productDescription,
        private OwnerVo $owner,
        private ChallengeUrlVo $challengeUrl
    )
    {
    }

    /**
     * @param User $user
     * @param AmountVo $amount
     * @param OrderVo $order
     * @param CurrencyVo $currency
     * @param ProductDescriptionVo $productDescription
     * @param OwnerVo $owner
     * @param ChallengeUrlVo $challengeUrl
     * @return Purchase
     */
    public static function create(
        User $user,
        AmountVo $amount,
        OrderVo $order,
        CurrencyVo $currency,
        ProductDescriptionVo $productDescription,
        OwnerVo $owner,
        ChallengeUrlVo $challengeUrl
    ): Purchase
    {
        return new self(
            $user,
            $amount,
            $order,
            $currency,
            $productDescription,
            $owner,
            $challengeUrl,
        );
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getAmount(): AmountVo
    {
        return $this->amount;
    }

    public function setAmount(AmountVo $amount): void
    {
        $this->amount = $amount;
    }

    public function getOrder(): OrderVo
    {
        return $this->order;
    }

    public function setOrder(OrderVo $order): void
    {
        $this->order = $order;
    }

    public function getCurrency(): CurrencyVo
    {
        return $this->currency;
    }

    public function setCurrency(CurrencyVo $currency): void
    {
        $this->currency = $currency;
    }

    public function getProductDescription(): ProductDescriptionVo
    {
        return $this->productDescription;
    }

    public function setProductDescription(ProductDescriptionVo $productDescription): void
    {
        $this->productDescription = $productDescription;
    }

    public function getOwner(): OwnerVo
    {
        return $this->owner;
    }

    public function setOwner(OwnerVo $owner): void
    {
        $this->owner = $owner;
    }

    public function getChallengeUrl(): ChallengeUrlVo
    {
        return $this->challengeUrl;
    }

    public function setChallengeUrl(ChallengeUrlVo $challengeUrl): void
    {
        $this->challengeUrl = $challengeUrl;
    }
}
