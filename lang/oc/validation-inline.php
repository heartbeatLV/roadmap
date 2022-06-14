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
    'accepted'        => 'Aqueste camp deu èsser acceptat.',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'Aquò es pas una URL valida.',
    'after'           => 'La data deu èsser posteriora a :date.',
    'after_or_equal'  => 'La data deu èsser posteriora o egala a :date.',
    'alpha'           => 'Lo camp a de conténer pas que de letras.',
    'alpha_dash'      => 'Lo camp a de conténer pas que de letras, nombres e de tirets.',
    'alpha_num'       => 'Lo camp a de conténer pas que de letras e nombres.',
    'array'           => 'Lo camp deu èsser un tablèu.',
    'before'          => 'La deu èsser data anteriora a :date.',
    'before_or_equal' => 'La deu èsser anteriora o egala a :date.',
    'between'         => [
        'array'   => 'Lo tablèu deu aver entre :min e :max elements.',
        'file'    => 'La talha del fichièr deu èsser entre :min e :max kiloctets.',
        'numeric' => 'La valor deu èsser entre :min e :max.',
        'string'  => 'Lo tèxt deu conténer entre :min e :max caractèrs.',
    ],
    'boolean'          => 'Aqueste camp deu èsser verai o fals.',
    'confirmed'        => 'Lo camp de confirmacion correspond pas.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'Aquò es pas una data valida.',
    'date_equals'      => 'La data deu èsser una data egala a :date.',
    'date_format'      => 'Aqueste camp correspond pas al format :format.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'Aqueste camp deu èsser diferent de :other.',
    'digits'           => 'Aqueste camp deu conténer :digits chifras.',
    'digits_between'   => 'Aqueste camp deu conténer  entre :min e :max chifras.',
    'dimensions'       => 'La talha de l’imatge es pas confòrma.',
    'distinct'         => 'Aqueste camp a un doblon.',
    'email'            => 'Aqueste camp deu èsser una adreça de corrièl valida.',
    'ends_with'        => 'Aqueste camp deu acabar per una de las valors seguentas : :values',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'Aqueste camp seleccionat es invalid.',
    'file'             => 'Aqueste camp deu èsser un fichièr.',
    'filled'           => 'Aqueste camp deu aver una valor.',
    'gt'               => [
        'array'   => 'Lo tablèu deu conténer mai de :value elements.',
        'file'    => 'La talha del fichièr deu èsser superiora a :value kilo-octets.',
        'numeric' => 'La valor de deu èsser superiora a :value.',
        'string'  => 'Lo tèxt deu conténer mai de :value caractèrs.',
    ],
    'gte' => [
        'array'   => 'Lo tablèu deu conténer almens :value elements.',
        'file'    => 'La talha del fichièr deu èsser superiora o egala a :value kilo-octets.',
        'numeric' => 'La valor deu èsser superiora o egala a :value.',
        'string'  => 'Lo tèxt deu conténer almens :value caractèrs.',
    ],
    'image'    => 'Aqueste camp deu èsser un imatge.',
    'in'       => 'Aqueste camp es invalid.',
    'in_array' => 'Aqueste camp existís pas dins :other.',
    'integer'  => 'Aqueste camp deu èsser un nombre entièr.',
    'ip'       => 'Aqueste camp deu èsser una adreça IP valida.',
    'ipv4'     => 'Aqueste camp deu èsser una adreça IPv4 valida.',
    'ipv6'     => 'Aqueste camp deu èsser una adreça IPv6 valida.',
    'json'     => 'Aqueste camp deu èsser una cadena JSON valida.',
    'lt'       => [
        'array'   => 'Lo tablèu deu conténer almens :value elements.',
        'file'    => 'La talha del fichièr deu èsser inferiora a :value kilo-octets.',
        'numeric' => 'La valor deu èsser inferiora a :value.',
        'string'  => 'Lo tèxt deu conténer almens :value caractèrs.',
    ],
    'lte' => [
        'array'   => 'Lo tablèu deu conténer al pus mai :value elements.',
        'file'    => 'La talha del fichièr deu èsser inferiora o egala :value kilo-octets.',
        'numeric' => 'La valor deu èsser inferiora o egala a :value.',
        'string'  => 'Lo tèxt deu conténer al pus mai :value caractèrs.',
    ],
    'mac_address' => 'The value must be a valid MAC address.',
    'max'         => [
        'array'   => 'Lo tablèu deu pas conténer mai de :max elements.',
        'file'    => 'La talha del fichièr deu pas èsser superior a :max kiloctets.',
        'numeric' => 'La valor deu pas èsser superiora a :max.',
        'string'  => 'Lo tèxt deu èsser superior a :max caractèrs.',
    ],
    'mimes'     => 'Lo fichièr deu èsser del tipe : :values.',
    'mimetypes' => 'Lo fichièr deu èsser del tipe :values.',
    'min'       => [
        'array'   => 'Lo tablèu deu conténer almens :min elements.',
        'file'    => 'La talha del fichièr deu fa almens :min kiloctets.',
        'numeric' => 'La valor deu fa almens :min o mai.',
        'string'  => 'Lo tèxt deu fa almens :min caractèrs.',
    ],
    'multiple_of'          => 'La valor deu èsser un multiple de :value',
    'not_in'               => 'Lo camp seleccionat es invalid.',
    'not_regex'            => 'Lo format del camp es invalid.',
    'numeric'              => 'Lo camp deu èsser un nombre.',
    'password'             => 'Lo senhal es incorrèct',
    'present'              => 'Aqueste camp deu èsser present.',
    'prohibited'           => 'This field is prohibited.',
    'prohibited_if'        => 'This field is prohibited when :other is :value.',
    'prohibited_unless'    => 'This field is prohibited unless :other is in :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Lo format del camp es invalid.',
    'required'             => 'Aqueste camp es obligatòri.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Aqueste camp es obligatòri quand :other es :value.',
    'required_unless'      => 'Aqueste camp es obligatòri levat se :other es dins :values.',
    'required_with'        => 'Aqueste camp es obligatòri quand :values es present.',
    'required_with_all'    => 'Aqueste camp es obligatòri quand :values es present.',
    'required_without'     => 'Aqueste camp es obligatòri quand :values es pas present.',
    'required_without_all' => 'Aqueste camp es obligatòri quand cap de :values son presents.',
    'same'                 => 'Aqueste camp es identic a :other.',
    'size'                 => [
        'array'   => 'Lo tablèu deu conténer :size elements.',
        'file'    => 'La talha del fichièr deu èsser :size kiloctets.',
        'numeric' => 'La valor deu èsser :size.',
        'string'  => 'Lo tèxt deu conténer :size caractèrs.',
    ],
    'starts_with' => 'Aqueste camp deu començar amb una de las valors seguentas : :values',
    'string'      => 'Aqueste camp deu èsser una cadena de tèxt.',
    'timezone'    => 'Aqueste camp deu èsser una zòna orària valida.',
    'unique'      => 'La valor es ja presa.',
    'uploaded'    => 'Lo fichièr a pas pogut s’enviar.',
    'url'         => 'Lo format de l’URL es invalid.',
    'uuid'        => 'Aqueste camp deu èsser un UUID valid',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'messatge-personalizat',
        ],
    ],
];
