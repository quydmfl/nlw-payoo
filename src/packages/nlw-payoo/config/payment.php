<?php
return [
    'default' => 'payoo',

    'drivers' => [
        'payoo' => [
            'apiPurchaseUrl' => 'https://api.payro24.ir/v1.0/payment',
            'apiPaymentUrl' => 'https://api.payro24.ir/link/',
            'apiVerificationUrl' => 'https://api.payro24.ir/v1.0/payment/verify',
            'merchantId' => '',
            'callbackUrl' => 'http://yoursite.com/path/to',
            'description' => 'payment in ' . config('app.name'),
            'sandbox' => false,
        ],
    ],
];