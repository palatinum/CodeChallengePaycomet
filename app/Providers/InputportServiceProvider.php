<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Paycomet\Purchase\Application\CreatePurchaseUseCase;
use Paycomet\Purchase\Application\ExecutePurchaseUseCase;
use Paycomet\Purchase\Infrastructure\Inputport\CreatePurchaseInputport;
use Paycomet\Purchase\Infrastructure\Inputport\ExecutePurchaseInputport;
use Paycomet\User\Application\AddUserExternalTokenUseCase;
use Paycomet\User\Application\CreateUserUseCase;
use Paycomet\User\Infrastructure\Inputport\AddUserExternalTokenInputport;
use Paycomet\User\Infrastructure\Inputport\CreateUserInputport;

class InputportServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CreateUserInputport::class, CreateUserUseCase::class);
        $this->app->bind(AddUserExternalTokenInputport::class, AddUserExternalTokenUseCase::class);
        $this->app->bind(CreatePurchaseInputport::class, CreatePurchaseUseCase::class);
        $this->app->bind(ExecutePurchaseInputport::class, ExecutePurchaseUseCase::class);
    }
}
