<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Paycomet\Purchase\Infrastructure\Outputadapter\Services\ExecutePurchaseOutputadapter;
use Paycomet\Purchase\Infrastructure\Outputport\Services\ExecutePurchaseOutputport;
use Paycomet\Shared\Infrastructure\Outputadapter\Paycomet\Rest\ClientRestOutputadapter;
use Paycomet\Shared\Infrastructure\Outputadapter\Paycomet\Soap\ClientSoapOutputadapter;
use Paycomet\Shared\Infrastructure\Outputport\Services\ClientRestOutputport;
use Paycomet\Shared\Infrastructure\Outputport\Services\ClientSoapOutputport;
use Paycomet\User\Infrastructure\Outputadapter\Services\AddUserExternalTokenOutputadapter;
use Paycomet\User\Infrastructure\Outputport\Services\AddUserExternalTokenOutputport;

class OutputportProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(AddUserExternalTokenOutputport::class, AddUserExternalTokenOutputadapter::class);
        $this->app->bind(ClientSoapOutputport::class, ClientSoapOutputadapter::class);
        $this->app->bind(ClientRestOutputport::class, ClientRestOutputadapter::class);
        $this->app->bind(ExecutePurchaseOutputport::class, ExecutePurchaseOutputadapter::class);
    }
}
