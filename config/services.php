<?php

declare(strict_types = 1);

return [
    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain'   => env('MAILGUN_DOMAIN'),
        'secret'   => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme'   => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key'    => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sso' => [
        'title'         => env('SSO_LOGIN_TITLE', 'Login with SSO'),
        'url'           => env('SSO_BASE_URL'),
        'client_id'     => env('SSO_CLIENT_ID'),
        'client_secret' => env('SSO_CLIENT_SECRET'),
        'redirect'      => env('SSO_CALLBACK'),
        'forced'        => env('SSO_FORCED', false),
        'scopes'        => env('SSO_SCOPES'),
        'http_verify'   => env('SSO_HTTP_VERIFY', true),
        'endpoints'     => [
            'authorize' => env('SSO_ENDPOINT_AUTHORIZE'),
            'revoke'    => env('SSO_ENDPOINT_REVOKE'),
            'token'     => env('SSO_ENDPOINT_TOKEN'),
            'user'      => env('SSO_ENDPOINT_USER'),
        ],
    ],
];
