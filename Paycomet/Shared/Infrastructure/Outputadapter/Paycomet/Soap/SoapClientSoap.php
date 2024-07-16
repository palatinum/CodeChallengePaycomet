<?php

namespace Paycomet\Shared\Infrastructure\Outputadapter\Paycomet\Soap;

use AllowDynamicProperties;
use Exception;
use Paycomet\Purchase\Domain\Purchase;
use Paycomet\Shared\Infrastructure\Outputadapter\Paycomet\ClientSoapInterface;
use Paycomet\User\Domain\User;
use Paycomet\User\Domain\ValueObjects\IdentificationVo;
use Paycomet\User\Domain\ValueObjects\TokenVo;
use SoapClient as SoapClientBase;
use SoapFault;

#[AllowDynamicProperties] class SoapClientSoap extends SoapClientBase implements ClientSoapInterface
{
    /**
     * @throws SoapFault
     */
    public function __construct()
    {
        parent::__construct(config('paycomet.soap.endPoint'), config('paycomet.soap.options'));
        $this->merchantCode = config('paycomet.merchantCode');
        $this->terminal = config('paycomet.terminal');
        $this->jetID = config('paycomet.jetId');
    }

    /**
     * @param User $user
     * @return User|null
     */
    public function addUserToken(User $user): ?User
    {
        $password = config('paycomet.password');
        $signature = hash("sha512",
            $this->merchantCode
            .$user->getJettoken()->value()
            .$this->jetID
            .$this->terminal
            .$password
        );
        try {
            $addUserTokenResponse = $this->__soapCall('add_user_token', [
                $this->merchantCode,
                $this->terminal,
                $user->getJettoken()->value(),
                $this->jetID,
                $signature,
                $user->getOriginalip()->value()
            ]);
        } catch (Exception) {
            //TODO: implement exception class
            return null;
        }
        if($addUserTokenResponse["DS_ERROR_ID"] !== "0") {
            //TODO: implement exception class
            return null;
        }
        $user->setIdentification(IdentificationVo::create($addUserTokenResponse["DS_IDUSER"]));
        $user->setToken(TokenVo::create($addUserTokenResponse["DS_TOKEN_USER"]));
        return $user;
    }
}
