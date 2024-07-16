<?php

namespace Paycomet\Purchase\Infrastructure\Inputadapter\Laravel\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Paycomet\Purchase\Infrastructure\Inputadapter\Laravel\Http\Requests\ExecutePurchaseRequest;
use Paycomet\Purchase\Infrastructure\Inputport\CreatePurchaseInputport;
use Paycomet\Purchase\Infrastructure\Inputport\ExecutePurchaseInputport;
use Paycomet\User\Infrastructure\Inputport\AddUserExternalTokenInputport;
use Paycomet\User\Infrastructure\Inputport\CreateUserInputport;

class ExecutePurchaseController extends Controller
{
    /**
     * @param CreateUserInputport $createUser
     * @param AddUserExternalTokenInputport $addUserExternalToken
     * @param CreatePurchaseInputport $createPurchase
     * @param ExecutePurchaseInputport $executePurchase
     */
    public function __construct(
        readonly CreateUserInputport $createUser,
        readonly AddUserExternalTokenInputport $addUserExternalToken,
        readonly CreatePurchaseInputport $createPurchase,
        readonly ExecutePurchaseInputport $executePurchase,
    ){}

    /**
     * @param ExecutePurchaseRequest $request
     * @return RedirectResponse|null
     */
    public function __invoke(ExecutePurchaseRequest $request): ?RedirectResponse
    {
        $jeToken = $request->string('paytpvToken');
        $ip = $request->ip();
        $amount = $request->string('amount');

        $user = $this->createUser->__invoke(
            $jeToken,
            $ip,
            null,
            null,
        );

        $externalUser = $this->addUserExternalToken->__invoke($user);
        if(!$externalUser) {
            //TODO: implement exception class
            return null;
        }

        $purchase = $this->createPurchase->__invoke(
            $externalUser,
            $amount,
            "MERCHANTORDER-" . date("Y/m/d h:I:s"),
            "EUR",
            "XML_BANKSTORE TEST productDescription",
            "XML_BANKSTORE TEST owner",
            null
        );

        $executePurchase = $this->executePurchase->__invoke($purchase);
        return Redirect::to($executePurchase->getChallengeUrl()->value());
    }
}
