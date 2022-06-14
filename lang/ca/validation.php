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
    'accepted'        => ':attribute ha de ser acceptat.',
    'accepted_if'     => 'The :attribute must be accepted when :other is :value.',
    'active_url'      => ':attribute no és un URL vàlid.',
    'after'           => ':attribute ha de ser una data posterior a :date.',
    'after_or_equal'  => ':attribute ha de ser una data posterior o igual a :date.',
    'alpha'           => ':attribute només pot contenir lletres.',
    'alpha_dash'      => ':attribute només pot contenir lletres, números i guions.',
    'alpha_num'       => ':attribute només pot contenir lletres i números.',
    'array'           => ':attribute ha de ser una matriu.',
    'before'          => ':attribute ha de ser una data anterior a :date.',
    'before_or_equal' => ':attribute ha de ser una data anterior o igual a :date.',
    'between'         => [
        'array'   => ':attribute ha de tenir entre :min - :max ítems.',
        'file'    => ':attribute ha de pesar entre :min - :max kilobytes.',
        'numeric' => ':attribute ha d\'estar entre :min - :max.',
        'string'  => ':attribute ha de tenir entre :min - :max caràcters.',
    ],
    'boolean'          => 'El camp :attribute ha de ser verdader o fals',
    'confirmed'        => 'La confirmació de :attribute no coincideix.',
    'current_password' => 'The password is incorrect.',
    'date'             => ':attribute no és una data vàlida.',
    'date_equals'      => 'El :attribute ha de ser una data igual a :date.',
    'date_format'      => 'El camp :attribute no concorda amb el format :format.',
    'declined'         => 'The :attribute must be declined.',
    'declined_if'      => 'The :attribute must be declined when :other is :value.',
    'different'        => ':attribute i :other han de ser diferents.',
    'digits'           => ':attribute ha de tenir :digits dígits.',
    'digits_between'   => ':attribute ha de tenir entre :min i :max dígits.',
    'dimensions'       => 'Les dimensions de la imatge :attribute no són vàlides.',
    'distinct'         => 'El camp :attribute té un valor duplicat.',
    'email'            => ':attribute no és un e-mail vàlid',
    'ends_with'        => 'La :attribute ha d\'acabar amb una de les següents: :values.',
    'enum'             => 'The selected :attribute is invalid.',
    'exists'           => ':attribute és invàlid.',
    'file'             => 'El camp :attribute ha de ser un arxiu.',
    'filled'           => 'El camp :attribute és obligatori.',
    'gt'               => [
        'array'   => 'El :attribute ha de tenir més de :value ítems.',
        'file'    => 'El :attribute ha de ser superior a :value kilobytes.',
        'numeric' => 'El :attribute ha de ser superior a :value.',
        'string'  => 'El :attribute ha de superar els :value caràcters.',
    ],
    'gte' => [
        'array'   => 'El :attribute ha de tenir :value ítems o més.',
        'file'    => 'El :attribute ha de ser igual o superior a :value kilobytes.',
        'numeric' => 'El :attribute ha de ser igual o superior a :value.',
        'string'  => 'El :attribute ha de ser igual o superior a :value caràcters.',
    ],
    'image'    => ':attribute ha de ser una imatge.',
    'in'       => ':attribute és invàlid',
    'in_array' => 'El camp :attribute no existeix dintre de :other.',
    'integer'  => ':attribute ha de ser un nombre enter.',
    'ip'       => ':attribute ha de ser una adreça IP vàlida.',
    'ipv4'     => ':attribute ha de ser una adreça IPv4 vàlida.',
    'ipv6'     => ':attribute ha de ser una adreça IPv6 vàlida.',
    'json'     => 'El camp :attribute ha de ser una cadena JSON vàlida.',
    'lt'       => [
        'array'   => 'El :attribute ha de tenir menys de :value ítems.',
        'file'    => 'El :attribute ha de ser inferior a :value kilobytes.',
        'numeric' => 'El :attribute ha de ser inferior a :value.',
        'string'  => 'El :attribute no ha de superar els :value caràcters.',
    ],
    'lte' => [
        'array'   => 'El :attribute no ha de tenir més de :value ítems.',
        'file'    => 'El :attribute ha de ser igual o inferior a :value kilobytes.',
        'numeric' => 'El :attribute ha de ser igual o inferior a :value.',
        'string'  => 'El :attribute ha de ser igual o inferior a :value caràcters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max'         => [
        'array'   => ':attribute no pot tenir més de :max ítems.',
        'file'    => ':attribute no pot ser més gran que :max kilobytes.',
        'numeric' => ':attribute no pot ser més gran que :max.',
        'string'  => ':attribute no pot ser més gran que :max caràcters.',
    ],
    'mimes'     => ':attribute ha de ser un arxiu amb format: :values.',
    'mimetypes' => ':attribute ha de ser un arxiu amb format: :values.',
    'min'       => [
        'array'   => ':attribute ha de tenir almenys :min ítems.',
        'file'    => 'El tamany de :attribute ha de ser d\'almenys :min kilobytes.',
        'numeric' => 'El tamany de :attribute ha de ser d\'almenys :min.',
        'string'  => ':attribute ha de contenir almenys :min caràcters.',
    ],
    'multiple_of'          => 'La :attribute ha de ser un múltiple de :value',
    'not_in'               => ':attribute és invàlid.',
    'not_regex'            => 'El format de :attribute no és vàlid.',
    'numeric'              => ':attribute ha de ser numèric.',
    'password'             => 'La contrasenya és incorrecta.',
    'present'              => 'El camp :attribute ha d\'existir.',
    'prohibited'           => 'La :attribute camp està prohibit.',
    'prohibited_if'        => 'La :attribute camp és prohibida quan :other és :value.',
    'prohibited_unless'    => 'La :attribute camp és prohibida, tret que :other és en :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'El format de :attribute és invàlid.',
    'required'             => 'El camp :attribute és obligatori.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'El camp :attribute és obligatori quan :other és :value.',
    'required_unless'      => 'El camp :attribute és obligatori a no ser que :other sigui a :values.',
    'required_with'        => 'El camp :attribute és obligatori quan hi ha :values.',
    'required_with_all'    => 'El camp :attribute és obligatori quan hi ha :values.',
    'required_without'     => 'El camp :attribute és obligatori quan no hi ha :values.',
    'required_without_all' => 'El camp :attribute és obligatori quan no hi ha cap valor dels següents: :values.',
    'same'                 => ':attribute i :other han de coincidir.',
    'size'                 => [
        'array'   => ':attribute ha de contenir :size ítems.',
        'file'    => 'El tamany de :attribute ha de ser :size kilobytes.',
        'numeric' => 'El tamany de :attribute ha de ser :size.',
        'string'  => ':attribute ha de contenir :size caràcters.',
    ],
    'starts_with' => 'El :attribute ha de començar per un dels valors següents: :values',
    'string'      => 'El camp :attribute ha de ser una cadena.',
    'timezone'    => 'El camp :attribute ha de ser una zona vàlida.',
    'unique'      => ':attribute ja està registrat i no es pot repetir.',
    'uploaded'    => ':attribute ha fallat al pujar.',
    'url'         => ':attribute no és una adreça web vàlida.',
    'uuid'        => 'El :attribute ha de ser un indentificador únic universal (UUID) vàlid.',
    'custom'      => [
        'email' => [
            'unique' => 'L\':attribute ja ha sigut registrada.',
        ],
        'password' => [
            'min' => 'La :attribute ha de contenir més de :min caràcters',
        ],
    ],
];
