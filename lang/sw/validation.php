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
    'accepted'        => 'Lazima kipengele kikubaliwe.',
    'accepted_if'     => 'Kipengele :attribute lazima kikubalike wakati :other ni :value.',
    'active_url'      => 'Kipengele sio Chanzo Cha Anuani halali.',
    'after'           => 'Kipengele lazima kiwe tarehe baada ya :date.',
    'after_or_equal'  => ':attribute inapaswa kuwa tarehe baada au sawa na :date.',
    'alpha'           => 'Kipengele huenda kikawa tu chenye herufi.',
    'alpha_dash'      => 'Kipengele huenda kikawa tu chenye herufi, na vistari.',
    'alpha_num'       => 'Kipengele huenda kikawa tu chenye herufi na nambari.',
    'array'           => 'Kipengele lazima kiwe safu.',
    'before'          => 'Kipengele lazima kiwe tarehe kabla ya :date.',
    'before_or_equal' => ':attribute inapaswa kuwa tarehe kabla au sawa na :date.',
    'between'         => [
        'array'   => 'Kipengele lazima kiwe na kati ya :min na :max cha vifungu.',
        'file'    => 'Kipengele lazima kiwe kati ya :min na :max cha kilobaiti.',
        'numeric' => 'Kipengele lazima kiwe kati ya :min na :max.',
        'string'  => 'Kipengele lazima kiwe kati ya :min na :max cha herufi.',
    ],
    'boolean'          => 'Sehemu ya kipengele lazima iwe kweli au si kweli.',
    'confirmed'        => 'Uthibitisho wa kipengele haulingani.',
    'current_password' => 'Nenosiri si sahihi.',
    'date'             => 'Kipengele si tarehe halali.',
    'date_equals'      => ':attribute inapaswa kuwa tarehe sawa na :date.',
    'date_format'      => 'Kipengele hakilingani na muundo :date.',
    'declined'         => ':Attribute inapaswa kukataliwa.',
    'declined_if'      => ':Attribute inapaswa kukataliwa kama :other ni :value.',
    'different'        => 'Kipengele na :other lazima viwe tofauti.',
    'digits'           => 'Kipengele lazima kiwe na tarakimu :digits.',
    'digits_between'   => 'Kipengele lazima kiwe kati ya :min na :max cha tarakimu.',
    'dimensions'       => ':attribute ina vipimo vya picha ambavyo si sahihi.',
    'distinct'         => 'Sehemu ya kipengele ina thamani rudufu.',
    'email'            => 'Kipengele lazima kiwe anuani halali ya barua pepe.',
    'ends_with'        => 'Ya :attribute lazima mwisho na moja ya yafuatayo: :values.',
    'enum'             => ':Attribute iliyochaguliwa si sahihi.',
    'exists'           => 'Kipengele kilichochaguliwa si halali.',
    'file'             => ':attribute linapaswa kuwa faili.',
    'filled'           => 'Sehemu ya kipengele inahitajika.',
    'gt'               => [
        'array'   => ':attribute inapaswa kuwa na vitu zaidi ya :value.',
        'file'    => ':attribute inapaswa kuwa kubwa kuliko kilobaiti :value.',
        'numeric' => ':attribute inapaswa kuwa kubwa kuliko :value.',
        'string'  => ':attribute inapaswa kuwa kubwa kuliko herufi :value.',
    ],
    'gte' => [
        'array'   => ':attribute inapaswa kuwa na vitu :value au zaidi.',
        'file'    => ':attribute inapaswa kuwa kubwa au sawa na kilobaiti :value.',
        'numeric' => ':attribute inapaswa kuwa kubwa kuliko au sawa na :value.',
        'string'  => ':attribute inapaswa kuwa kubwa kuliko au sawa na herufi :value.',
    ],
    'image'    => 'Kipengele lazima kiwe picha.',
    'in'       => 'Kipengele kilichochaguliwa si halali.',
    'in_array' => 'Sehemu ya kipengele haipo katika :other.',
    'integer'  => 'Kipengele lazima kiwe nambari kamili.',
    'ip'       => 'Kipengele lazima kiwe anuani halali ya Itifaki ya Intaneti.',
    'ipv4'     => ':attribute inapaswa kuwa anwani ya IPv4 sahihi.',
    'ipv6'     => ':attribute inapaswa kuwa anwani ya IPv6 sahihi.',
    'json'     => 'Kipengele lazima kiwe kidwe halali cha Nukuu ya Java.',
    'lt'       => [
        'array'   => ':attribute inapaswa kuwa chini ya vitu :value.',
        'file'    => ':attribute inapaswa kuwa chini ya kilobaiti :value.',
        'numeric' => ':attribute inapaswa kuwa chini ya :value.',
        'string'  => ':attribute inapaswa kuwa chini ya herufi :value.',
    ],
    'lte' => [
        'array'   => ':attribute haipaswi kuwa na vitu ziadi ya :value.',
        'file'    => ':attribute inapaswa kuwa ndogo kuliko au sawa na kilobaiti :value.',
        'numeric' => ':attribute inapaswa kuwa ndogo kuliko au sawa na :value.',
        'string'  => ':attribute inapaswa kuwa ndogo au sawa na herufi :value.',
    ],
    'mac_address' => 'Kipengele :attribute kinapaswa kuwa anwani sahihi ya MAC.',
    'max'         => [
        'array'   => 'Kipengele huenda kisiwe na zaidi ya :max cha vifungu.',
        'file'    => 'Kipengele huenda si kikubwa kuliko :max cha kilobaiti.',
        'numeric' => 'Kipengele huenda si kikubwa kuliko :max.',
        'string'  => 'Kipengele huenda si kikubwa kuliko :max cha herufi.',
    ],
    'mimes'     => 'Kipengele lazima kiwe faili ya aina: :values.',
    'mimetypes' => ':attribute linapaswa kuwa faili la aina ya: :values.',
    'min'       => [
        'array'   => 'Kipengele lazima kiwe na angalau :min cha vifungu.',
        'file'    => 'Kipengele lazima kiwe angalau :min cha kilobaiti.',
        'numeric' => 'Kipengele lazima kiwe angalau :min.',
        'string'  => 'Kipengele lazima kiwe angalau :min cha herufi.',
    ],
    'multiple_of'          => 'Ya :attribute lazima kuwa nyingi ya :value',
    'not_in'               => 'Kipengele kilichochaguliwa si halali.',
    'not_regex'            => 'Muundo wa :attribute si sahihi.',
    'numeric'              => 'Kipengele lazima kiwe nambari.',
    'password'             => 'Nenosiri ni sahihi.',
    'present'              => 'Sehemu ya kipengele lazima iwepo.',
    'prohibited'           => 'Ya :attribute uwanja ni marufuku.',
    'prohibited_if'        => 'Ya :attribute uwanja ni marufuku wakati :other ni :value.',
    'prohibited_unless'    => 'Ya :attribute uwanja ni marufuku isipokuwa :other ni katika :values.',
    'prohibits'            => 'Kipengele :attribute kinakataza :other kuwepo/kuonyeshwa.',
    'regex'                => 'Muundo wa kipengele si halali.',
    'required'             => 'Sehemu ya kipengele inahitajika.',
    'required_array_keys'  => 'Kipengele :attribute ni lazima kiwe na maingizo ya: :values.',
    'required_if'          => 'Sehemu ya kipengele inahitajika wakati :other ni :value.',
    'required_unless'      => 'Sehemu ya kipengele inahitajika isipokuwa :other ni katika :values.',
    'required_with'        => 'Sehemu ya kipengele inahitajika wakati :values vipo.',
    'required_with_all'    => 'Sehemu ya kipengele inahitajika wakati :values vipo.',
    'required_without'     => 'Sehemu ya kipengele inahitajika wakati :values havipo.',
    'required_without_all' => 'Sehemu ya kipengele inahitajika wakati hakuna hata moja ya :values ipo.',
    'same'                 => 'Kipengele na :other lazima vilingane.',
    'size'                 => [
        'array'   => 'Kipengele lazima kiwe chenye :size ya kipimo.',
        'file'    => 'Kipengele lazima kiwe :size cha kilobaiti.',
        'numeric' => 'Kipengele lazima kiwe :size.',
        'string'  => 'Kipengele lazima kiwe :size cha herufi.',
    ],
    'starts_with' => ':attribute inapaswa kuanza na moja kati ya hizi zifuatazo: :values',
    'string'      => 'Kipengele lazima kiwe herufi.',
    'timezone'    => 'Kipengele lazima kiwe ukanda halali.',
    'unique'      => 'Kipengele tayari kimechukuliwa.',
    'uploaded'    => ':attribute imeshindwa kupakia.',
    'url'         => 'Muundo wa kipengele si halali.',
    'uuid'        => ':attribute inapaswa kuwa UUID yako.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'ujumbe wa desturi',
        ],
    ],
];
