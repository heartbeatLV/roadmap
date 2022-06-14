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
    'accepted'        => 'Uwanja huu ni lazima kukubaliwa.',
    'accepted_if'     => 'Uwanja huu ni lazima kukubaliwa wakati :other ni :value.',
    'active_url'      => 'Hiki si kiambatanishi halali (URL).',
    'after'           => 'Hii ni lazima sasa baada ya :date.',
    'after_or_equal'  => 'Hii ni lazima sasa baada ya au sawa na :date.',
    'alpha'           => 'Uwanja huu unaweza tu vyenye barua.',
    'alpha_dash'      => 'Uwanja huu unaweza tu vyenye herufi, nambari, dashi na andaskoo.',
    'alpha_num'       => 'Uwanja huu unaweza tu kuwa na herufi na namba.',
    'array'           => 'Uwanja huu lazima kuwa na safu.',
    'before'          => 'Hii ni lazima kuwa kabla ya :date.',
    'before_or_equal' => 'Hii ni lazima kuwa kabla ya au sawa na :date.',
    'between'         => [
        'array'   => 'Maudhui haya ni lazima yawe kati ya vipengele :min na :max.',
        'file'    => 'Faili hii lazima iwe kati ya kilobaiti :min na :max.',
        'numeric' => 'Thamani hii lazima iwe kati ya :min na :max.',
        'string'  => 'Mfuatano huu lazima uwe kati ya vibambo :min na :max .',
    ],
    'boolean'          => 'Uwanja huu lazima kuwa kweli au uongo.',
    'confirmed'        => 'Uthibitisho haina mechi.',
    'current_password' => 'Nambasiri si sahihi.',
    'date'             => 'Hii si halali kwa sasa.',
    'date_equals'      => 'Hii ni lazima kuwa tarehe sawa na :date.',
    'date_format'      => 'Hii haina muundo wa tarehe :format.',
    'declined'         => 'Thamani hii lazima ikataliwe.',
    'declined_if'      => 'Thamani hii lazima ikataliwa wakati :other ni :value.',
    'different'        => 'Thamani hii lazima kuwa tofauti kutoka :other.',
    'digits'           => 'Hii ni lazima :digits tarakimu.',
    'digits_between'   => 'Hii ni lazima kuwa kati ya :min na :max tarakimu.',
    'dimensions'       => 'Picha hii ina vipimo batili.',
    'distinct'         => 'Uwanja huu ina duplicate thamani.',
    'email'            => 'Hii ni lazima kuwa na anwani ya barua pepe halali.',
    'ends_with'        => 'Hii lazima mwisho na moja ya yafuatayo: :values.',
    'enum'             => 'Thamani iliyochaguliwa ni batili.',
    'exists'           => 'Thamani iliyochaguliwa tayari ipo.',
    'file'             => 'Maudhui lazima iwe faili.',
    'filled'           => 'Uwanja huu lazima kuwa na thamani.',
    'gt'               => [
        'array'   => 'Maudhui lazima yawe na zaidi ya :value vya thamani.',
        'file'    => 'Saizi ya faili lazima iwe kubwa kuliko :value kilobaiti.',
        'numeric' => 'Thamani lazima iwe kubwa kuliko :value.',
        'string'  => 'Mfuatano lazima uwe mkubwa kuliko vibambo :value.',
    ],
    'gte' => [
        'array'   => 'Maudhui lazima yawe na :value vya thamani au zaidi.',
        'file'    => 'Saizi ya faili lazima iwe kubwa kuliko au sawa na :value kilobaiti.',
        'numeric' => 'Thamani lazima iwe kubwa kuliko au sawa na :value.',
        'string'  => 'Mfuatano lazima uwe mkubwa kuliko au sawa na vibambo :value.',
    ],
    'image'    => 'Hii ni lazima kuwa picha.',
    'in'       => 'Kuchaguliwa thamani ni batili.',
    'in_array' => 'Thamani hii haipo katika :other.',
    'integer'  => 'Hii ni lazima kuwa integer.',
    'ip'       => 'Hii ni lazima kuwa halali anwani ya IP.',
    'ipv4'     => 'Hii ni lazima kuwa halali IPv4 anwani.',
    'ipv6'     => 'Hii ni lazima kuwa halali anuani IPv6.',
    'json'     => 'Hii ni lazima kuwa halali kamba JSON.',
    'lt'       => [
        'array'   => 'Maudhui lazima yawe na chini ya :value vya thamani.',
        'file'    => 'Saizi ya faili lazima iwe chini ya :value kilobaiti.',
        'numeric' => 'Thamani lazima iwe chini kuliko :value.',
        'string'  => 'Mfuatano lazima uwe chini ya vibambo :value.',
    ],
    'lte' => [
        'array'   => 'Maudhui lazima yasiwe na zaidi ya vipengele :value.',
        'file'    => 'Saizi ya faili lazima iwe chini ya au sawa na :value kilobaiti.',
        'numeric' => 'Thamani lazima iwe chini ya au sawa na :value.',
        'string'  => 'Mfuatano lazima uwe chini ya au sawa na vibambo :value.',
    ],
    'mac_address' => 'Thamani lazima iwe anwani halali ya MAC.',
    'max'         => [
        'array'   => 'Maudhui lazima yasiwe na zaidi ya vipengele :max.',
        'file'    => 'Ukubwa wa faili lazima usiwe zaidi ya :max kilobaiti.',
        'numeric' => 'Thamani lazima isiwe kubwa kuliko :max.',
        'string'  => 'Mfuatano lazima usiwe mkubwa kuliko vibambo :max.',
    ],
    'mimes'     => 'Hii ni lazima faili ya aina: :values.',
    'mimetypes' => 'Hii ni lazima faili ya aina: :values.',
    'min'       => [
        'array'   => 'Thamani lazima iwe na angalau vipengee :min.',
        'file'    => 'Saizi ya faili lazima iwe angalau :min kilobaiti.',
        'numeric' => 'Thamani lazima iwe angalau :min.',
        'string'  => 'Mfuatano lazima uwe na angalau vibambo :min.',
    ],
    'multiple_of'          => 'Thamani lazima kuwa nyingi ya :value',
    'not_in'               => 'Kuchaguliwa thamani ni batili.',
    'not_regex'            => 'Muundo huu ni batili.',
    'numeric'              => 'Hii ni lazima kuwa na idadi.',
    'password'             => 'Nenosiri ni sahihi.',
    'present'              => 'Uwanja huu lazima kuwa sasa.',
    'prohibited'           => 'Huu uwanja ni marufuku.',
    'prohibited_if'        => 'Huu uwanja ni marufuku wakati :other ni :value.',
    'prohibited_unless'    => 'Huu uwanja ni marufuku isipokuwa :other ni katika :values.',
    'prohibits'            => 'Uwanja huu unazuia :other kuonyeshwa.',
    'regex'                => 'Muundo huu ni batili.',
    'required'             => 'Uwanja huu ni required.',
    'required_array_keys'  => 'Sehemu hii ni lazima iwe na maingizo ya: :values.',
    'required_if'          => 'Uwanja huu ni required wakati :other ni :value.',
    'required_unless'      => 'Uwanja huu ni required isipokuwa :other ni katika :values.',
    'required_with'        => 'Uwanja huu ni required wakati :values ni sasa.',
    'required_with_all'    => 'Uwanja huu ni required wakati :values ni sasa.',
    'required_without'     => 'Uwanja huu ni required wakati :values ni si sasa.',
    'required_without_all' => 'Uwanja huu ni required wakati hakuna hata mmoja wa :values ni sasa.',
    'same'                 => 'Thamani ya shamba hili lazima mechi moja kutoka :other.',
    'size'                 => [
        'array'   => 'Maudhui ni lazima yawe na vipengele vya ukubwa wa :size.',
        'file'    => 'Saizi ya faili lazima iwe na kilobaiti :size.',
        'numeric' => 'Thamani lazima iwe :size.',
        'string'  => 'Mfuatano lazima uwe na herufi :size.',
    ],
    'starts_with' => 'Hii lazima kuanza na moja ya yafuatayo: :values.',
    'string'      => 'Hii ni lazima kuwa na kamba.',
    'timezone'    => 'Hii ni lazima kuwa halali wa eneo.',
    'unique'      => 'Hii tayari kuchukuliwa.',
    'uploaded'    => 'Hii imeshindwa kupakia.',
    'url'         => 'Muundo huu ni batili.',
    'uuid'        => 'Hii ni lazima kuwa halali UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
