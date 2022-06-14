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
    'accepted'        => ':attribute skal accepteres.',
    'accepted_if'     => 'The :attribute must be accepted when :other is :value.',
    'active_url'      => ':attribute er ikke en gyldig URL.',
    'after'           => ':attribute skal være en dato efter :date.',
    'after_or_equal'  => ':attribute skal være en dato efter eller lig med :date.',
    'alpha'           => ':attribute må kun bestå af bogstaver.',
    'alpha_dash'      => ':attribute må kun bestå af bogstaver, tal og bindestreger.',
    'alpha_num'       => ':attribute må kun bestå af bogstaver og tal.',
    'array'           => ':attribute skal være et array.',
    'before'          => ':attribute skal være en dato før :date.',
    'before_or_equal' => ':attribute skal være en dato før eller lig med :date.',
    'between'         => [
        'array'   => ':attribute skal indeholde mellem :min og :max elementer.',
        'file'    => ':attribute skal være mellem :min og :max kilobytes.',
        'numeric' => ':attribute skal være mellem :min og :max.',
        'string'  => ':attribute skal være mellem :min og :max tegn.',
    ],
    'boolean'          => ':attribute skal være sand eller falsk.',
    'confirmed'        => ':attribute er ikke det samme som bekræftelsesfeltet.',
    'current_password' => 'The password is incorrect.',
    'date'             => ':attribute er ikke en gyldig dato.',
    'date_equals'      => ':attribute skal være en dato lig med :date.',
    'date_format'      => ':attribute matcher ikke formatet :format.',
    'declined'         => 'The :attribute must be declined.',
    'declined_if'      => 'The :attribute must be declined when :other is :value.',
    'different'        => ':attribute og :other skal være forskellige.',
    'digits'           => ':attribute skal have :digits cifre.',
    'digits_between'   => ':attribute skal have mellem :min og :max cifre.',
    'dimensions'       => ':attribute har forkerte billeddimensioner.',
    'distinct'         => ':attribute har en duplikatværdi.',
    'email'            => ':attribute skal være en gyldig e-mailadresse.',
    'ends_with'        => ':attribute skal ende med et af følgende: :values.',
    'enum'             => 'The selected :attribute is invalid.',
    'exists'           => 'Valgte :attribute er ugyldig.',
    'file'             => ':attribute skal være en fil.',
    'filled'           => ':attribute skal udfyldes.',
    'gt'               => [
        'array'   => ':attribute skal være mere end :value elementer.',
        'file'    => ':attribute skal være større end :value kilobytes.',
        'numeric' => ':attribute skal være større end :value.',
        'string'  => ':attribute skal være mere end :value tegn.',
    ],
    'gte' => [
        'array'   => ':attribute skal have :value elementer eller mere.',
        'file'    => ':attribute skal være større end eller lig med :value kilobytes.',
        'numeric' => ':attribute skal være større end eller lig med :value.',
        'string'  => ':attribute skal være mere end eller lig med :value tegn.',
    ],
    'image'    => ':attribute skal være et billede.',
    'in'       => 'Valgte :attribute er ugyldig.',
    'in_array' => ':attribute eksisterer ikke i :other.',
    'integer'  => ':attribute skal være et heltal.',
    'ip'       => ':attribute skal være en gyldig IP adresse.',
    'ipv4'     => ':attribute skal være en gyldig IPv4 adresse.',
    'ipv6'     => ':attribute skal være en gyldig IPv6 adresse.',
    'json'     => ':attribute skal være en gyldig JSON streng.',
    'lt'       => [
        'array'   => ':attribute skal have mindre end :value items.',
        'file'    => ':attribute skal være mindre end :value kilobytes.',
        'numeric' => ':attribute skal være mindre end :value.',
        'string'  => ':attribute skal være mindre end :value tegn.',
    ],
    'lte' => [
        'array'   => ':attribute må ikke have mere end :value elementer.',
        'file'    => ':attribute skal være mindre eller lig med :value kilobytes.',
        'numeric' => ':attribute skal være mindre eller lig med :value.',
        'string'  => ':attribute skal være mindre eller lig med :value tegn.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max'         => [
        'array'   => ':attribute må ikke indeholde mere end :max elementer.',
        'file'    => ':attribute må ikke være større end :max kilobytes.',
        'numeric' => ':attribute må ikke være større end :max.',
        'string'  => ':attribute må ikke være mere end :max tegn.',
    ],
    'mimes'     => ':attribute skal være en fil af typen: :values.',
    'mimetypes' => ':attribute skal være en fil af typen: :values.',
    'min'       => [
        'array'   => ':attribute skal indeholde mindst :min elementer.',
        'file'    => ':attribute skal være mindst :min kilobytes.',
        'numeric' => ':attribute skal være mindst :min.',
        'string'  => ':attribute skal være mindst :min tegn.',
    ],
    'multiple_of'          => ':attribute skal være et multiplum af :value',
    'not_in'               => 'Valgte :attribute er ugyldig.',
    'not_regex'            => 'Formatet for :attribute er ugyldigt.',
    'numeric'              => ':attribute skal være et tal.',
    'password'             => 'Adgangskoden er forkert.',
    'present'              => ':attribute skal være tilstede.',
    'prohibited'           => ':attribute-feltet er forbudt.',
    'prohibited_if'        => 'Feltet :attribute er forbudt, når :other er :value.',
    'prohibited_unless'    => ':attribute-feltet er forbudt, medmindre :other er i :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => ':attribute formatet er ugyldigt.',
    'required'             => ':attribute skal udfyldes.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':attribute skal udfyldes når :other er :value.',
    'required_unless'      => ':attribute er påkrævet med mindre :other findes i :values.',
    'required_with'        => ':attribute skal udfyldes når :values er udfyldt.',
    'required_with_all'    => ':attribute skal udfyldes når :values er udfyldt.',
    'required_without'     => ':attribute skal udfyldes når :values ikke er udfyldt.',
    'required_without_all' => ':attribute skal udfyldes når ingen af :values er udfyldt.',
    'same'                 => ':attribute og :other skal være ens.',
    'size'                 => [
        'array'   => ':attribute skal indeholde :size elementer.',
        'file'    => ':attribute skal være :size kilobytes.',
        'numeric' => ':attribute skal være :size.',
        'string'  => ':attribute skal være :size tegn lang.',
    ],
    'starts_with' => ':attribute skal starte med én af følgende: :values.',
    'string'      => ':attribute skal være en streng.',
    'timezone'    => ':attribute skal være en gyldig tidszone.',
    'unique'      => ':attribute er allerede taget.',
    'uploaded'    => ':attribute fejlede i upload.',
    'url'         => ':attribute formatet er ugyldigt.',
    'uuid'        => ':attribute skal være en gyldig UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
