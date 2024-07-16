<?php

namespace Paycomet\Shared\Infrastructure\Outputadapter\Paycomet\Soap;

use Paycomet\Purchase\Domain\Purchase;
use Paycomet\Shared\Infrastructure\Outputport\Services\ClientSoapOutputport;
use Paycomet\User\Domain\User;

readonly class ClientSoapOutputadapter implements ClientSoapOutputport
{
    /**
     * @param SoapClientSoap $soapClient
     */
    public function __construct(public SoapClientSoap $soapClient) {}

    /**
     * @param User $user
     * @return User|null
     */
    public function addUserToken(User $user): ?User
    {
        return $this->soapClient->addUserToken($user);
    }
}
