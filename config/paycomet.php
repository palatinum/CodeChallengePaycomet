<?php

return [
    'jetId' => env('PAYCOMET_JETID'),
    'merchantCode' => env('PAYCOMET_MERCHANTCODE'),
    'terminal' => env('PAYCOMET_TERMINAL'),
    'password' => env('PAYCOMET_PASSWORD'),
    'soap' => [
        'endPoint' => env('PAYCOMET_WSDL_ENDPOINT'),
        'options' => [
            'stream_context' => [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ]
        ]
    ],
    'rest' => [
        'methodId' => 1,
        'secure' => 1,
        'options' => [
            'base_uri' => env('PAYCOMET_REST_ENDPOINT'),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'PAYCOMET-API-TOKEN' => env('PAYCOMET_API_TOKEN')
            ]
        ]
    ]
];
