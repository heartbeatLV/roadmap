<?php

declare(strict_types = 1);

/*
|--------------------------------------------------------------------------
| Validation Language Lines
|--------------------------------------------------------------------------
|
| The following language lines contain the default error messages used by
| the validator class. Some of these rules have multiple versions such
| as the size rules. Feel free to tweak each of these messages here.
|
*/

return [
    'accepted'        => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಒಪ್ಪಿಕೊಳ್ಳಬೇಕು.',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'ಈ ಒಂದು ಮಾನ್ಯವಾದ URL.',
    'after'           => 'ಈ ಮಾಡಬೇಕು ನಂತರ ಒಂದು ದಿನಾಂಕ :date.',
    'after_or_equal'  => 'ಈ ಮಾಡಬೇಕು ನಂತರ ಒಂದು ದಿನಾಂಕ ಅಥವಾ ಸಮಾನ :date.',
    'alpha'           => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ may only contain letters.',
    'alpha_dash'      => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ may only contain letters, numbers, ಗೆರೆಗಳು ಮತ್ತು ಒತ್ತಿಹೇಳುತ್ತದೆ.',
    'alpha_num'       => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ may only contain ಅಕ್ಷರಗಳು ಮತ್ತು ಸಂಖ್ಯೆಗಳ.',
    'array'           => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಮಾಡಬೇಕು ಒಂದು ಶ್ರೇಣಿಯನ್ನು.',
    'before'          => 'ಈ ಮಾಡಬೇಕು ಒಂದು ದಿನಾಂಕ ಮೊದಲು :date.',
    'before_or_equal' => 'ಈ ಮಾಡಬೇಕು ಒಂದು ದಿನಾಂಕ ಮೊದಲು ಅಥವಾ ಸಮಾನ :date.',
    'between'         => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'          => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಇರಬೇಕು ನಿಜ ಅಥವಾ ಸುಳ್ಳು.',
    'confirmed'        => 'ದೃಢೀಕರಣ ಹೊಂದಿಕೆಯಾಗುವುದಿಲ್ಲ.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'This is not a valid date.',
    'date_equals'      => 'ಈ ಮಾಡಬೇಕು ಒಂದು ದಿನಾಂಕ ಸಮಾನ :date.',
    'date_format'      => 'ಈ does not match the format :format.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'This value must be ವಿವಿಧ :other.',
    'digits'           => 'ಈ ಮಾಡಬೇಕು :digits ಅಂಕೆಗಳು.',
    'digits_between'   => 'ಈ ನಡುವೆ ಇರಬೇಕು :min ಮತ್ತು :max ಅಂಕೆಗಳು.',
    'dimensions'       => 'ಈ image has invalid dimensions.',
    'distinct'         => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಹೊಂದಿದೆ ಒಂದು ನಕಲು ಮೌಲ್ಯ.',
    'email'            => 'ಈ must be a valid email address.',
    'ends_with'        => 'ಈ must end with one of the following: :values.',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'ಆಯ್ಕೆ value is invalid.',
    'file'             => 'ವಿಷಯ ಇರಬೇಕು ಫೈಲ್.',
    'filled'           => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಹೊಂದಿರಬೇಕು ಒಂದು ಮೌಲ್ಯ.',
    'gt'               => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte' => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'    => 'ಈ ಮಾಡಬೇಕು ಎಂದು ಒಂದು ಚಿತ್ರ.',
    'in'       => 'ಆಯ್ಕೆ value is invalid.',
    'in_array' => 'ಈ ಮೌಲ್ಯವು ಅಸ್ತಿತ್ವದಲ್ಲಿಲ್ಲ :other.',
    'integer'  => 'ಈ must be an integer.',
    'ip'       => 'ಈ ಮಾಡಬೇಕು ಮಾನ್ಯ IP ವಿಳಾಸ.',
    'ipv4'     => 'ಈ ಮಾಡಬೇಕು ಒಂದು ಮಾನ್ಯವಾದ IPv4 ವಿಳಾಸ.',
    'ipv6'     => 'ಈ must be a valid IPv6 ವಿಳಾಸವನ್ನು ಹೊಂದಿದೆ.',
    'json'     => 'ಈ must be a valid JSON ಸ್ಟ್ರಿಂಗ್.',
    'lt'       => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte' => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'mac_address' => 'The value must be a valid MAC address.',
    'max'         => [
        'array'   => 'The content must not have more than :max items.',
        'file'    => 'The file size must not be greater than :max kilobytes.',
        'numeric' => 'The value must not be greater than :max.',
        'string'  => 'The string must not be greater than :max characters.',
    ],
    'mimes'     => 'ಈ must be a ಫೈಲ್ ಪ್ರಕಾರ: :values.',
    'mimetypes' => 'ಈ must be a ಫೈಲ್ ಪ್ರಕಾರ: :values.',
    'min'       => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'The value must be a multiple of :value',
    'not_in'               => 'ಆಯ್ಕೆ value is invalid.',
    'not_regex'            => 'ಈ ರೂಪದಲ್ಲಿ ಅಮಾನ್ಯವಾಗಿದೆ.',
    'numeric'              => 'ಈ must be a number.',
    'password'             => 'ಪಾಸ್ವರ್ಡ್ ತಪ್ಪಾಗಿದೆ.',
    'present'              => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಅಸ್ತಿತ್ವದಲ್ಲಿರಬೇಕು.',
    'prohibited'           => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ನಿಷೇಧಿಸಲಾಗಿದೆ.',
    'prohibited_if'        => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ನಿಷೇಧಿಸಲಾಗಿದೆ ಮಾಡಿದಾಗ :other ಆಗಿದೆ :value.',
    'prohibited_unless'    => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ನಿಷೇಧಿಸಲಾಗಿದೆ ಹೊರತು :other ಆಗಿದೆ :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'ಈ ರೂಪದಲ್ಲಿ ಅಮಾನ್ಯವಾಗಿದೆ.',
    'required'             => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಅಗತ್ಯವಿದೆ.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಅಗತ್ಯವಿದೆ ಮಾಡಿದಾಗ :other ಆಗಿದೆ :value.',
    'required_unless'      => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಅಗತ್ಯವಿದೆ ಹೊರತು :other ಆಗಿದೆ :values.',
    'required_with'        => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಅಗತ್ಯವಿದೆ ಮಾಡಿದಾಗ :values ಇರುತ್ತದೆ.',
    'required_with_all'    => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಅಗತ್ಯವಿದೆ ಮಾಡಿದಾಗ :values ಇರುತ್ತವೆ.',
    'required_without'     => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಅಗತ್ಯವಿದೆ ಮಾಡಿದಾಗ :values ಇರುವುದಿಲ್ಲ.',
    'required_without_all' => 'ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಅಗತ್ಯವಿದೆ ಮಾಡಿದಾಗ ಯಾವುದೂ :values ಇರುತ್ತವೆ.',
    'same'                 => 'ಮೌಲ್ಯವನ್ನು ಈ ಕ್ಷೇತ್ರದಲ್ಲಿ ಮಾಡಬೇಕು ಒಂದು ಹೊಂದಿಸಲು :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with' => 'ಈ must start with one of the following: :values.',
    'string'      => 'ಈ ಮಾಡಬೇಕು ಎಂದು ಒಂದು ಸ್ಟ್ರಿಂಗ್.',
    'timezone'    => 'ಈ must be a valid ವಲಯ.',
    'unique'      => 'ಈ ತೆಗೆದುಕೊಂಡಾಗಿದೆ.',
    'uploaded'    => 'ಈ failed to upload.',
    'url'         => 'ಈ ರೂಪದಲ್ಲಿ ಅಮಾನ್ಯವಾಗಿದೆ.',
    'uuid'        => 'ಈ must be a valid UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
