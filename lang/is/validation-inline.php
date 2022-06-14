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
    'accepted'        => 'Þetta sviði verður samþykkt.',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'Þetta er ekki gilt SLÓÐ.',
    'after'           => 'Þetta verður að vera á stefnumót eftir :date.',
    'after_or_equal'  => 'Þetta verður að vera á stefnumót eftir eða jafnt og :date.',
    'alpha'           => 'Þetta sviði getur aðeins innihalda bréf.',
    'alpha_dash'      => 'Þetta sviði getur aðeins innihalda bréf, númer, bandstrik og undirstrikar.',
    'alpha_num'       => 'Þetta sviði getur aðeins innihalda bréf og tölur.',
    'array'           => 'Þetta sviði verður að vera fylki.',
    'before'          => 'Þetta hlýtur að vera dagsetningu áður en :date.',
    'before_or_equal' => 'Þetta hlýtur að vera dagsetningu áður en eða jafnt og :date.',
    'between'         => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'          => 'Þetta sviði verður að vera rétt eða rangt.',
    'confirmed'        => 'Staðfestingu passar ekki.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'Þetta er ekki gilt degi.',
    'date_equals'      => 'Þetta hlýtur að vera stefnumót jafn :date.',
    'date_format'      => 'Þetta passar ekki í formi :format.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'Þetta gildi verður að vera öðruvísi frá :other.',
    'digits'           => 'Þetta hlýtur að vera :digits tölustafi.',
    'digits_between'   => 'Þetta verður að vera á milli :min og :max tölustafi.',
    'dimensions'       => 'Þessari mynd hefur ógild mál.',
    'distinct'         => 'Þetta sviði hefur afrit gildi.',
    'email'            => 'Þetta hlýtur að vera gild netfangið.',
    'ends_with'        => 'Þetta verður að enda með eftirfarandi: :values.',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'Valið gildi er ógilt.',
    'file'             => 'Efni verður að vera á skrá.',
    'filled'           => 'Þetta sviði verður að hafa gildi.',
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
    'image'    => 'Þetta hlýtur að vera mynd.',
    'in'       => 'Valið gildi er ógilt.',
    'in_array' => 'Þetta gildi er ekki til í :other.',
    'integer'  => 'Þetta hlýtur að vera heil.',
    'ip'       => 'Þetta hlýtur að vera gild IP.',
    'ipv4'     => 'Þetta hlýtur að vera gild IPv4 heimilisfang.',
    'ipv6'     => 'Þetta hlýtur að vera gild IPv6 heimilisfang.',
    'json'     => 'Þetta hlýtur að vera gild JSON band.',
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
    'mimes'     => 'Þetta verður að skrá af tegund: :values.',
    'mimetypes' => 'Þetta verður að skrá af tegund: :values.',
    'min'       => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Gildi verður að vera margar af :value',
    'not_in'               => 'Valið gildi er ógilt.',
    'not_regex'            => 'Þessu sniði er ógilt.',
    'numeric'              => 'Þetta hlýtur að vera númer.',
    'password'             => 'Lykilorð er rangt.',
    'present'              => 'Þetta sviði verður að vera til staðar.',
    'prohibited'           => 'Þetta sviði er bannað.',
    'prohibited_if'        => 'Þetta sviði er bannað þegar :other er :value.',
    'prohibited_unless'    => 'Þetta sviði er bönnuð nema :other er í :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Þessu sniði er ógilt.',
    'required'             => 'Þetta sviði er krafist.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Þetta sviði er krafist þegar :other er :value.',
    'required_unless'      => 'Þetta sviði er krafist nema :other er í :values.',
    'required_with'        => 'Þetta sviði er krafist þegar :values er til staðar.',
    'required_with_all'    => 'Þetta sviði er krafist þegar :values eru til staðar.',
    'required_without'     => 'Þetta sviði er krafist þegar :values er ekki til staðar.',
    'required_without_all' => 'Þetta sviði er krafist þegar ekkert af :values eru til staðar.',
    'same'                 => 'Gildi á þessu sviði verður að passa eitt frá :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with' => 'Þetta verður að byrja með eftirfarandi: :values.',
    'string'      => 'Þetta hlýtur að vera band.',
    'timezone'    => 'Þetta hlýtur að vera gild svæði.',
    'unique'      => 'Þetta hefur nú þegar verið tekin.',
    'uploaded'    => 'Þetta tókst ekki að hlaða.',
    'url'         => 'Þessu sniði er ógilt.',
    'uuid'        => 'Þetta hlýtur að vera gild UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
