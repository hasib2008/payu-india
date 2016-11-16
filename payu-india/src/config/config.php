<?php
/**
 * PayU Setting & API Credentials
 * Created by Md Hasibur Rahaman <hasib2008@gmail.com>.
 */

return [
    'mode'    => 'test', // Can only be 'test' Or 'live'. If empty or invalid.
    'test' => [
        'key'    => env('PAYU_TEST_KEY', ''),
        'salt'   => env('PAYU_TEST_SALT', ''),
    ],
    'live' => [
        'key'    => env('PAYU_LIVE_KEY', ''),
        'salt'   => env('PAYU_LIVE_SALT', ''),
        
    ],
    'surl' => url('payUpayment/success'),
    'furl' => url('payUpayment/success'),
];
