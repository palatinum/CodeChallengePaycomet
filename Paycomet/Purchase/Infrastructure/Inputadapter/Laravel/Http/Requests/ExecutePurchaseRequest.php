<?php

namespace Paycomet\Purchase\Infrastructure\Inputadapter\Laravel\Http\Requests;

class ExecutePurchaseRequest extends RequestBase
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'paytpvToken' => 'required|string',
            'amount' => 'required|string',
        ];
    }
}
