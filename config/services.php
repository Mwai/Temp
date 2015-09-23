<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id'     => '1615380565398173',
        'client_secret' => '0b84abec1c52ac517b6ba62d9c7ec2c9',
        'redirect'      => 'http://localhost:8000/social/handle/facebook',
    ],

    'twitter' => [
        'client_id'     => env('TW_ID'),
        'client_secret' => env('TW_SECRET'),
        'redirect'      => env('TW_REDIRECT')
    ],
    'google' => [
        'client_id'     => '961968493261-t2fgdqjgbp2fgqq127su49jcpsn7q766.apps.googleusercontent.com',
        'client_secret' => 'j5KHnkqs5tiSYs4zMSNF5Q5x',
        'redirect'      => 'http://localhost:8000/social/handle/google',
    ],

];
