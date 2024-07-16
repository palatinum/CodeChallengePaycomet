<?php

namespace Paycomet\Shared\Infrastructure\Outputadapter\Paycomet\Rest;

use AllowDynamicProperties;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Paycomet\Purchase\Domain\Purchase;
use Paycomet\Purchase\Domain\ValueObjects\ChallengeUrlVo;
use Paycomet\Shared\Infrastructure\Outputadapter\Paycomet\ClientRestInterface;

#[AllowDynamicProperties] class RestClientSoap implements ClientRestInterface
{
    /**
     *
     */
    public function __construct()
    {
        $this->client = new Client(config('paycomet.rest.options'));
        $this->terminal = config('paycomet.terminal');
        $this->methodId = config('paycomet.rest.methodId');
        $this->secure = config('paycomet.rest.secure');
        $this->scoring = config('paycomet.rest.scoring');
        $this->userInteraction = config('paycomet.rest.userInteraction');
    }

    /**
     * @param Purchase $purchase
     * @return Purchase|null
     */
    public function executePurchase(Purchase $purchase): ?Purchase
    {
        try {
            $executePurchaseResponse = $this->client->post('v1/payments', [
                'form_params' => [
                    'language' => 'es',
                    'payment' => [
                        'amount' => $purchase->getAmount()->value(),
                        'currency' => $purchase->getCurrency()->value(),
                        'idUser' => $purchase->getUser()->getIdentification()->value(),
                        'methodId' => $this->methodId,
                        'order' => $purchase->getOrder()->value(),
                        'originalIp' => $purchase->getUser()->getOriginalip()->value(),
                        'secure' => $this->secure,
                        'terminal' => $this->terminal,
                        'tokenUser' => $purchase->getUser()->getToken()->value(),
                    ]
                ]
            ]);
        } catch (GuzzleException $exception) {
            //TODO: implement exception class
            return null;
        }
        $response = json_decode($executePurchaseResponse->getBody()->getContents(), true);
        if($response["errorCode"] !== 0) {
            return null;
        }
        if(!empty($response['challengeUrl'])) {
            $purchase->setChallengeUrl(
                ChallengeUrlVo::create($response['challengeUrl'])
            );
        }
        return $purchase;
    }
}
