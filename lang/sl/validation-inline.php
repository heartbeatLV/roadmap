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
    'accepted'        => 'Polje mora biti sprejeto.',
    'accepted_if'     => 'Polje mora biti sprejeto, če je :other :value.',
    'active_url'      => 'URL ni veljaven.',
    'after'           => 'Datum mora biti kasneje kot :date.',
    'after_or_equal'  => 'Datum mora bit enak ali kasneje kot :date.',
    'alpha'           => 'Polje lahko vsebuje le črke.',
    'alpha_dash'      => 'Polje lahko vsebuje le črke, številke, pomišljaje in podčrtaje.',
    'alpha_num'       => 'Polje lahko vsebuje le črke in številke.',
    'array'           => 'Polje mora biti lista.',
    'before'          => 'Datum mora biti pred :date.',
    'before_or_equal' => 'Datum mora biti pred ali enak :date.',
    'between'         => [
        'array'   => 'Polje mora imeti od :min do :max elementov.',
        'file'    => 'Datoteka mora biti med :min in :max kilobajti.',
        'numeric' => 'Vrednost mora biti med :min in :max.',
        'string'  => 'Vnos mora biti dolg od :min do :max znakov.',
    ],
    'boolean'          => 'Polje mora biti da ali ne.',
    'confirmed'        => 'Potrditev se ne ujema.',
    'current_password' => 'Geslo ni veljavno.',
    'date'             => 'Datum ni veljaven.',
    'date_equals'      => 'Datum mora biti enak :date.',
    'date_format'      => 'Datum ne ustreza formatu :format.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'Vrednost mora biti drugačna od :other.',
    'digits'           => 'Vnos mora vsebovati :digits števk.',
    'digits_between'   => 'Vnos mora vsebovati od :min do :max števk.',
    'dimensions'       => 'Slika ni pravilnih dimenzij.',
    'distinct'         => 'Polje ima podvojeno vrednost.',
    'email'            => 'Elektronski naslov mora biti veljaven.',
    'ends_with'        => 'Vnos se mora končati z eno od naslednjih vrednosti: :values.',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'Izbrana vrednost ni veljavna.',
    'file'             => 'Vsebina mora biti datoteka.',
    'filled'           => 'Polje mora biti izpolnjeno.',
    'gt'               => [
        'array'   => 'Polje mora imeti več kot :value vrednosti.',
        'file'    => 'Velikost datoteke mora biti večja od :value kilobajtov.',
        'numeric' => 'Vrednost mora biti večja od :value.',
        'string'  => 'Vnos mora biti daljši od :value znakov.',
    ],
    'gte' => [
        'array'   => 'Polje mora vsebovati najmanj :value elementov.',
        'file'    => 'Velikost datoteke mora biti najmanj :value kilobajtov.',
        'numeric' => 'Vrednost mora biti najmanj :value.',
        'string'  => 'Vnos mora biti dolg najmanj :value znakov.',
    ],
    'image'    => 'To polje mora biti slika.',
    'in'       => 'Izbrana vrednost ni veljavna.',
    'in_array' => 'Izbrana vrednost ne obstaja v :other.',
    'integer'  => 'To polje mora biti številka.',
    'ip'       => 'To polje mora biti veljaven IP naslov.',
    'ipv4'     => 'To polje mora biti veljaven IPv4 naslov.',
    'ipv6'     => 'To polje mora biti veljaven IPv6 naslov.',
    'json'     => 'To polje mora biti veljaven JSON vnos.',
    'lt'       => [
        'array'   => 'Polje mora vsebovati manj kot :value elementov.',
        'file'    => 'Velikost datoteke mora biti manjša od :value kilobajtov.',
        'numeric' => 'Vrednost mora biti manjša od :value.',
        'string'  => 'Vnos mora biti krajši od :value znakov.',
    ],
    'lte' => [
        'array'   => 'Polje ne sme vsebovati več kot :value elementov.',
        'file'    => 'Velikost datoteke ne sme presegati :value kilobajtov.',
        'numeric' => 'Vrednost ne sme biti večja od :value.',
        'string'  => 'Vnos ne sme biti daljši od :value znakov.',
    ],
    'mac_address' => 'The value must be a valid MAC address.',
    'max'         => [
        'array'   => 'Polje ne sme vsebovati več kot :max elementov.',
        'file'    => 'Velikost datoteke ne sme presegati :max kilobajtov.',
        'numeric' => 'Vrednost ne sme biti večja od :max.',
        'string'  => 'Vnos ne sme biti daljši od :max znakov.',
    ],
    'mimes'     => 'Datoteka mora biti tipa: :values.',
    'mimetypes' => 'Datoteka mora biti tipa: :values.',
    'min'       => [
        'array'   => 'Polje mora vsebovati najmanj :min elementov.',
        'file'    => 'Velikost datoteke je lahko najmanj :min kilobajtov.',
        'numeric' => 'Vrednost je lahko najmanj :min.',
        'string'  => 'Vnos ima lahko najmanj :min znakov.',
    ],
    'multiple_of'          => 'Vrednost mora biti večkratnik :value',
    'not_in'               => 'Izbrana vrednost ni veljavna.',
    'not_regex'            => 'Oblika vnosa ni veljavna.',
    'numeric'              => 'Vnešena mora biti številka.',
    'password'             => 'Geslo ni pravilno.',
    'present'              => 'Polje mora biti izpolnjeno.',
    'prohibited'           => 'To polje je prepovedano.',
    'prohibited_if'        => 'To polje je prepovedano, kadar je :other :value.',
    'prohibited_unless'    => 'To polje je prepovedano, razen če je :other v :values.',
    'prohibits'            => 'To polje prepoveduje prisotnost :other.',
    'regex'                => 'Oblika vnosa ni veljavna.',
    'required'             => 'Polje je obvezno.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Polje je obvezno, ko je v polju :other izbrana vrednost :value.',
    'required_unless'      => 'Polje je obvezno, razen če je v polju :other izbrana vrednost :values.',
    'required_with'        => 'Polje je obvezno, ko je vnešena vrednost :values.',
    'required_with_all'    => 'Polje je obvezno, ko so vnešene vrednosti :values.',
    'required_without'     => 'Polje je obvezno, ko ni vnešena vrednost :values.',
    'required_without_all' => 'Polje je obvezno, če niso vnešene vrednosti :values.',
    'same'                 => 'Vrednost polja se mora ujemati z vrednostjo polja :other.',
    'size'                 => [
        'array'   => 'Polje mora vsebovati :size elementov.',
        'file'    => 'Datoteka mora biti velika :size kilobajtov.',
        'numeric' => 'Vrednost mora biti :size.',
        'string'  => 'Vnos mora biti dolg :size znakov.',
    ],
    'starts_with' => 'Vrednost se mora začeti z eno od naslednjih možnosti: :values.',
    'string'      => 'Vnos mora biti besedilo.',
    'timezone'    => 'Časovni pas mora biti veljaven.',
    'unique'      => 'Vnešeno je že zasedeno.',
    'uploaded'    => 'Prenos ni bil uspešen.',
    'url'         => 'Oblika ni pravilna.',
    'uuid'        => 'Vnos mora biti veljaven UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
