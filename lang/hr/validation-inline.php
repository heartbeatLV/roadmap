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
    'accepted'        => 'Ovo polje mora biti prihvaćeno.',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'To je nevažeći URL.',
    'after'           => 'To bi trebao biti datum nakon :date.',
    'after_or_equal'  => 'To bi trebao biti datum nakon ili jednaka :date.',
    'alpha'           => 'Ovo polje može sadržavati samo slova.',
    'alpha_dash'      => 'Ovo polje može sadržavati samo slova, brojeve, crtice i podcrtavanja.',
    'alpha_num'       => 'Ovo polje može sadržavati samo slova i brojeve.',
    'array'           => 'Ovo polje mora biti polje.',
    'before'          => 'To bi trebao biti datum do :date.',
    'before_or_equal' => 'To bi trebao biti datum prije ili jednako :date.',
    'between'         => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'          => 'Ovo polje mora biti istinito ili lažno.',
    'confirmed'        => 'Potvrda se ne podudara.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'To nije valjan datum.',
    'date_equals'      => 'To bi trebao biti datum jednak :date.',
    'date_format'      => 'To ne odgovara formatu :format.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'Ova se vrijednost mora razlikovati od :other.',
    'digits'           => 'To bi trebalo biti :digits znamenki.',
    'digits_between'   => 'To bi trebalo biti između :min i :max znamenki.',
    'dimensions'       => 'Ova slika ima nevažeće dimenzije.',
    'distinct'         => 'Ovo polje ima ponavljajuće značenje.',
    'email'            => 'To mora biti valjana adresa e-pošte.',
    'ends_with'        => 'To bi trebalo završiti s jednom od sljedećih stavki: :values.',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'Odabrana vrijednost nije važeća.',
    'file'             => 'Sadržaj mora biti datoteka.',
    'filled'           => 'Ovo polje mora biti važno.',
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
    'image'    => 'To mora biti slika.',
    'in'       => 'Odabrana vrijednost nije važeća.',
    'in_array' => 'Ova vrijednost ne postoji u :other.',
    'integer'  => 'To mora biti cijeli broj.',
    'ip'       => 'To mora biti valjana IP adresa.',
    'ipv4'     => 'To mora biti valjana IPv4 adresa.',
    'ipv6'     => 'To mora biti valjana IPv6 adresa.',
    'json'     => 'To bi trebao biti valjani JSON niz.',
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
    'mimes'     => 'To mora biti datoteka tipa: :values.',
    'mimetypes' => 'To mora biti datoteka tipa: :values.',
    'min'       => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Ova vrijednost mora biti višekratnik :value',
    'not_in'               => 'Odabrana vrijednost nije važeća.',
    'not_regex'            => 'Ovaj format je neprihvatljiv.',
    'numeric'              => 'To mora biti broj.',
    'password'             => 'Lozinka je pogrešna.',
    'present'              => 'Ovo polje mora biti prisutno.',
    'prohibited'           => 'Ovo polje je zabranjeno.',
    'prohibited_if'        => 'Ovo polje je zabranjeno ako je :other :value.',
    'prohibited_unless'    => 'Ovo polje je zabranjeno, osim ako :other nije u :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Ovaj format je neprihvatljiv.',
    'required'             => 'Ovo polje je obavezno.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Ovo polje je obavezno ako je :other :value.',
    'required_unless'      => 'Ovo polje je obavezno, osim ako :other nije u :values.',
    'required_with'        => 'Ovo polje je obavezno u prisutnosti :values.',
    'required_with_all'    => 'Ovo polje je potrebno u prisutnosti :values.',
    'required_without'     => 'Ovo polje je obavezno ako :values nedostaje.',
    'required_without_all' => 'Ovo polje je obavezno ako nitko od :values nije prisutan.',
    'same'                 => 'Vrijednost tog polja mora se podudarati s vrijednošću od :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with' => 'To bi trebalo započeti s jednom od sljedećih stavki: :values.',
    'string'      => 'To mora biti žica.',
    'timezone'    => 'To bi trebala biti dopuštena zona.',
    'unique'      => 'To je već učinjeno.',
    'uploaded'    => 'To nije uspjelo preuzimanje.',
    'url'         => 'Ovaj format je neprihvatljiv.',
    'uuid'        => 'To bi trebao biti valjan UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
