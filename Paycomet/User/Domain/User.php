<?php

namespace Paycomet\User\Domain;

use Paycomet\User\Domain\ValueObjects\IdentificationVo;
use Paycomet\User\Domain\ValueObjects\JettokenVo;
use Paycomet\User\Domain\ValueObjects\OriginalipVo;
use Paycomet\User\Domain\ValueObjects\TokenVo;

class User
{
    /**
     * @param JettokenVo $jettoken
     * @param OriginalipVo $originalip
     * @param IdentificationVo $identification
     * @param TokenVo $token
     */
    public function __construct(
        private JettokenVo $jettoken,
        private OriginalipVo $originalip,
        private IdentificationVo $identification,
        private TokenVo $token,
    )
    {
    }

    /**
     * @param JettokenVo $jettoken
     * @param OriginalipVo $originalip
     * @param IdentificationVo $identification
     * @param TokenVo $token
     * @return User
     */
    public static function create(
        JettokenVo $jettoken,
        OriginalipVo $originalip,
        IdentificationVo $identification,
        TokenVo $token,
    ): User
    {
        return new self(
            $jettoken,
            $originalip,
            $identification,
            $token,
        );
    }

    public function getJettoken(): JettokenVo
    {
        return $this->jettoken;
    }

    public function setJettoken(JettokenVo $jettoken): void
    {
        $this->jettoken = $jettoken;
    }

    public function getOriginalip(): OriginalipVo
    {
        return $this->originalip;
    }

    public function setOriginalip(OriginalipVo $originalip): void
    {
        $this->originalip = $originalip;
    }

    public function getIdentification(): IdentificationVo
    {
        return $this->identification;
    }

    public function setIdentification(IdentificationVo $identification): void
    {
        $this->identification = $identification;
    }

    public function getToken(): TokenVo
    {
        return $this->token;
    }

    public function setToken(TokenVo $token): void
    {
        $this->token = $token;
    }
}
