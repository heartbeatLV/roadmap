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
    'accepted'        => ':attribute tuleb aktsepteerida.',
    'accepted_if'     => 'The :attribute must be accepted when :other is :value.',
    'active_url'      => ':attribute ei ole kehtiv URL.',
    'after'           => ':attribute peab olema kuupäev pärast :date.',
    'after_or_equal'  => ':attribute peab olema kuupäev pärast või samastuma :date.',
    'alpha'           => ':attribute võib sisaldada vaid tähemärke.',
    'alpha_dash'      => ':attribute võib sisaldada vaid tähti, numbreid ja kriipse.',
    'alpha_num'       => ':attribute võib sisaldada vaid tähti ja numbreid.',
    'array'           => ':attribute peab olema massiiv.',
    'before'          => ':attribute peab olema kuupäev enne :date.',
    'before_or_equal' => ':attribute peab olema kuupäev enne või samastuma :date.',
    'between'         => [
        'array'   => ':attribute peab olema :min ja :max kirje vahel.',
        'file'    => ':attribute peab olema :min ja :max kilobaidi vahel.',
        'numeric' => ':attribute peab olema :min ja :max vahel.',
        'string'  => ':attribute peab olema :min ja :max tähemärgi vahel.',
    ],
    'boolean'          => ':attribute väli peab olema tõene või väär.',
    'confirmed'        => ':attribute kinnitus ei vasta.',
    'current_password' => 'The password is incorrect.',
    'date'             => ':attribute pole kehtiv kuupäev.',
    'date_equals'      => ':attribute peab olema kuupäev väärtusega :date',
    'date_format'      => ':attribute ei vasta formaadile :format.',
    'declined'         => 'The :attribute must be declined.',
    'declined_if'      => 'The :attribute must be declined when :other is :value.',
    'different'        => ':attribute ja :other peavad olema erinevad.',
    'digits'           => ':attribute peab olema :digits numbrit.',
    'digits_between'   => ':attribute peab olema :min ja :max numbri vahel.',
    'dimensions'       => ':attribute on valed pildi suurused.',
    'distinct'         => ':attribute väljal on topeltväärtus.',
    'email'            => ':attribute peab olema kehtiv e-posti aadress.',
    'ends_with'        => ':attribute peab lõppema ühega järgmistest: :values.',
    'enum'             => 'The selected :attribute is invalid.',
    'exists'           => 'Valitud :attribute on vigane.',
    'file'             => ':attribute peab olema fail.',
    'filled'           => ':attribute väli on nõutav.',
    'gt'               => [
        'array'   => ':attribute peab sisaldama rohkem kui :value üksust',
        'file'    => ':attribute peab olema suurem kui :value kilobaiti',
        'numeric' => ':attribute peab olema suurem kui :value',
        'string'  => ':attribute peab sisaldama rohkem kui :value tähemärki',
    ],
    'gte' => [
        'array'   => ':attribute peab sisaldama vähemalt :value üksust',
        'file'    => ':attribute peab olema suurem kui :value kilobaiti või sama palju',
        'numeric' => ':attribute peab olema suurem kui :value või samasugune',
        'string'  => ':attribute peab sisaldama rohkem kui :value tähemärki või sama palju',
    ],
    'image'    => ':attribute peab olema pilt.',
    'in'       => 'Valitud :attribute on vigane.',
    'in_array' => ':attribute väli ei eksisteeri :other sees.',
    'integer'  => ':attribute peab olema täisarv.',
    'ip'       => ':attribute peab olema kehtiv IP aadress.',
    'ipv4'     => ':attribute peab olema kehtiv IPv4 aadress.',
    'ipv6'     => ':attribute peab olema kehtiv IPv6 aadress.',
    'json'     => ':attribute peab olema kehtiv JSON string.',
    'lt'       => [
        'array'   => ':attribute peab sisaldama vähem kui :value üksust',
        'file'    => ':attribute peab olema väiksem kui :value kilobaiti',
        'numeric' => ':attribute peab olema väiksem kui :value',
        'string'  => ':attribute ei tohi ületada :value tähemärki',
    ],
    'lte' => [
        'array'   => ':attribute ei tohi sisaldada rohkem kui :value üksust',
        'file'    => ':attribute peab olema väiksem kui :value kilobaiti või sama palju',
        'numeric' => ':attribute peab olema väiksem kui :value või samasugune',
        'string'  => ':attribute peab sisaldama vähem või sama palju :value tähemärke',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max'         => [
        'array'   => ':attribute ei tohi sisaldada rohkem kui :max kirjet.',
        'file'    => ':attribute ei tohi olla suurem kui :max kilobaiti.',
        'numeric' => ':attribute ei tohi olla suurem kui :max.',
        'string'  => ':attribute ei tohi olla suurem kui :max tähemärki.',
    ],
    'mimes'     => ':attribute peab olema :values tüüpi.',
    'mimetypes' => ':attribute peab olema :values tüüpi.',
    'min'       => [
        'array'   => ':attribute peab olema vähemalt :min kirjet.',
        'file'    => ':attribute peab olema vähemalt :min kilobaiti.',
        'numeric' => ':attribute peab olema vähemalt :min.',
        'string'  => ':attribute peab olema vähemalt :min tähemärki.',
    ],
    'multiple_of'          => ':attribute peab olema :value Kordne',
    'not_in'               => 'Valitud :attribute on vigane.',
    'not_regex'            => ':attribute vorming on vale',
    'numeric'              => ':attribute peab olema number.',
    'password'             => 'Parool on vale.',
    'present'              => ':attribute väli peab olema esindatud.',
    'prohibited'           => ':attribute väli on keelatud.',
    'prohibited_if'        => ':attribute väli on keelatud, kui :other on :value.',
    'prohibited_unless'    => ':attribute väli on keelatud, välja arvatud juhul, kui :other on :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => ':attribute vorming on vigane.',
    'required'             => ':attribute väli on nõutud.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':attribute väli on nõutud, kui :other on :value.',
    'required_unless'      => ':attribute väli on nõutud, välja arvatud, kui :other on :values.',
    'required_with'        => ':attribute väli on nõutud, kui :values on esindatud.',
    'required_with_all'    => ':attribute väli on nõutud, kui :values on esindatud.',
    'required_without'     => ':attribute väli on nõutud, kui :values ei ole esindatud.',
    'required_without_all' => ':attribute väli on nõutud, kui ükski :values pole esindatud.',
    'same'                 => ':attribute ja :other peavad sobima.',
    'size'                 => [
        'array'   => ':attribute peab sisaldama :size kirjet.',
        'file'    => ':attribute peab olema :size kilobaiti.',
        'numeric' => ':attribute peab olema :size.',
        'string'  => ':attribute peab olema :size tähemärki.',
    ],
    'starts_with' => ':attribute peab algama ühega järgmistest: :values',
    'string'      => ':attribute peab olema string.',
    'timezone'    => ':attribute peab olema kehtiv tsoon.',
    'unique'      => ':attribute on juba hõivatud.',
    'uploaded'    => ':attribute ei õnnestunud laadida.',
    'url'         => ':attribute vorming on vigane.',
    'uuid'        => ':attribute peab olema õige UUID',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'kohandatud-teade',
        ],
    ],
];
