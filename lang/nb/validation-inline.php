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
    'accepted'        => 'Må aksepteres.',
    'accepted_if'     => 'Dette feltet må aksepteres når :other er :value.',
    'active_url'      => 'Er ikke en gyldig URL.',
    'after'           => 'Må være en dato etter :date.',
    'after_or_equal'  => 'Må være en dato etter eller lik :date.',
    'alpha'           => 'Må kun bestå av bokstaver.',
    'alpha_dash'      => 'Må kun bestå av bokstaver, tall og bindestreker.',
    'alpha_num'       => 'Må kun bestå av bokstaver og tall.',
    'array'           => 'Må være en matrise.',
    'before'          => 'Må være en dato før :date.',
    'before_or_equal' => 'Må være en dato før eller lik :date.',
    'between'         => [
        'array'   => 'Må ha mellom :min - :max elementer.',
        'file'    => 'Må være mellom :min - :max kilobytes.',
        'numeric' => 'Må være mellom :min - :max.',
        'string'  => 'Må være mellom :min - :max tegn.',
    ],
    'boolean'          => 'Må være sann eller usann',
    'confirmed'        => 'Er ikke likt bekreftelsesfeltet.',
    'current_password' => 'Oppgitt passord er feil.',
    'date'             => 'Er ikke en gyldig dato.',
    'date_equals'      => 'Må være en dato lik :date.',
    'date_format'      => 'Samsvarer ikke med formatet :format.',
    'declined'         => 'Denne verdien må avvises.',
    'declined_if'      => 'Denne verdien må avvises når :other er :value.',
    'different'        => 'Denne og :other må være forskellige.',
    'digits'           => 'Må ha :digits siffer.',
    'digits_between'   => 'Må være mellom :min og :max siffer.',
    'dimensions'       => 'Har ugyldige bildedimensjoner.',
    'distinct'         => 'Har en duplisert verdi.',
    'email'            => 'Må være en gyldig e-postadresse.',
    'ends_with'        => 'Må ende med en av følgende: :values.',
    'enum'             => 'Den valgte verdien er ugyldig.',
    'exists'           => 'Den valgte veriden er ugyldig.',
    'file'             => 'Må være en fil.',
    'filled'           => 'Må fylles ut.',
    'gt'               => [
        'array'   => 'Må ha flere enn :value elementer.',
        'file'    => 'Må være større enn :value kilobytes.',
        'numeric' => 'Må være større enn :value.',
        'string'  => 'Må være større enn :value tegn.',
    ],
    'gte' => [
        'array'   => 'Må ha :value elementer eller flere.',
        'file'    => 'Må være større enn eller lik :value kilobytes.',
        'numeric' => 'Må være større enn eller lik :value.',
        'string'  => 'Må være større enn eller lik :value tegn.',
    ],
    'image'    => 'Må være et bilde.',
    'in'       => 'Den valgte veriden er ugyldig.',
    'in_array' => 'Den valgte veriden eksisterer ikke i :other.',
    'integer'  => 'Må være et heltall.',
    'ip'       => 'Må være en gyldig IP-adresse.',
    'ipv4'     => 'Må være en gyldig IPv4-adresse.',
    'ipv6'     => 'Må være en gyldig IPv6-addresse.',
    'json'     => 'Må være på JSON-format.',
    'lt'       => [
        'array'   => 'Må ha færre enn :value elementer.',
        'file'    => 'Må være mindre enn :value kilobytes.',
        'numeric' => 'Må være mindre enn :value.',
        'string'  => 'Må være kortere enn :value tegn.',
    ],
    'lte' => [
        'array'   => 'Må ikke ha flere enn :value elementer.',
        'file'    => 'Må være mindre enn eller lik :value kilobytes.',
        'numeric' => 'Må være mindre enn eller lik :value.',
        'string'  => 'Må være kortere enn eller lik :value tegn.',
    ],
    'mac_address' => 'Verdien må være en gyldig MAC-adresse.',
    'max'         => [
        'array'   => 'Må ikke ha flere enn :max elementer.',
        'file'    => 'Må ikke være større enn :max kilobytes.',
        'numeric' => 'Må ikke være større enn :max.',
        'string'  => 'Må ikke være større enn :max tegn.',
    ],
    'mimes'     => 'Må være en fil av typen: :values.',
    'mimetypes' => 'Må være en fil av typen: :values.',
    'min'       => [
        'array'   => 'Må ha minst :min elementer.',
        'file'    => 'Må være minst :min kilobytes.',
        'numeric' => 'Må være minst :min.',
        'string'  => 'Må være minst :min tegn.',
    ],
    'multiple_of'          => 'Må være flere av :value',
    'not_in'               => 'Den valgte veriden er ugyldig.',
    'not_regex'            => 'Formatet på veriden er ugyldig.',
    'numeric'              => 'Må være et tall.',
    'password'             => 'Passordet er feil.',
    'present'              => 'Må eksistere.',
    'prohibited'           => 'Felt er forbudt.',
    'prohibited_if'        => 'Felt er forbudt når :other er :value.',
    'prohibited_unless'    => 'Felt er forbudt med mindre :other er i :values.',
    'prohibits'            => 'Dette feltet forbyr :other å være til stede.',
    'regex'                => 'Formatet på veriden er ugyldig.',
    'required'             => 'Må fylles ut.',
    'required_array_keys'  => 'Dette feltet må inneholde oppføringer for: :values.',
    'required_if'          => 'Må fylles ut når :other er :value.',
    'required_unless'      => 'Er påkrevd med mindre :other finnes blant verdiene :values.',
    'required_with'        => 'Må fylles ut når :values er utfylt.',
    'required_with_all'    => 'Er påkrevd når :values er oppgitt.',
    'required_without'     => 'Må fylles ut når :values ikke er utfylt.',
    'required_without_all' => 'Er påkrevd når ingen av :values er oppgitt.',
    'same'                 => 'Denne og :other må være like.',
    'size'                 => [
        'array'   => 'Må inneholde :size elementer.',
        'file'    => 'Må være :size kilobytes.',
        'numeric' => 'Må være :size.',
        'string'  => 'Må være :size tegn lang.',
    ],
    'starts_with' => 'Må starte med en av følgende: :values.',
    'string'      => 'Må være en tekststreng.',
    'timezone'    => 'Må være en gyldig tidssone.',
    'unique'      => 'Er allerede i bruk.',
    'uploaded'    => 'Kunne ikke lastes opp.',
    'url'         => 'Formatet på er ugyldig.',
    'uuid'        => 'Må være en gyldig UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
