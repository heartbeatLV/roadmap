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
    'accepted'        => 'Бұл өрісті қабылдау керек.',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'Бұл жарамсыз URL.',
    'after'           => 'Бұл :date-дан кейінгі күн болуы керек.',
    'after_or_equal'  => 'Бұл :date-тен кейінгі немесе оған тең күн болуы керек.',
    'alpha'           => 'Бұл өрісте тек әріптер болуы мүмкін.',
    'alpha_dash'      => 'Бұл өрісте тек әріптер, сандар, сызықшалар және астын сызу болуы мүмкін.',
    'alpha_num'       => 'Бұл өрісте тек әріптер мен сандар болуы мүмкін.',
    'array'           => 'Бұл өріс массив болуы керек.',
    'before'          => 'Бұл :date-ге дейінгі күн болуы керек.',
    'before_or_equal' => 'Бұл :date жылға дейінгі немесе оған тең күн болуы керек.',
    'between'         => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'          => 'Бұл өріс шын немесе жалған болуы керек.',
    'confirmed'        => 'Растау бірдей емес.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'Бұл жарамды күн емес.',
    'date_equals'      => 'Бұл :date жылға тең күн болуы керек.',
    'date_format'      => 'Бұл :format форматына сәйкес келмейді.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'Бұл мән :other-ден өзгеше болуы керек.',
    'digits'           => 'Бұл :digits сан болуы керек.',
    'digits_between'   => 'Бұл :min және :max сандар арасында болуы керек.',
    'dimensions'       => 'Бұл кескіннің қолайсыз өлшемдері бар.',
    'distinct'         => 'Бұл өрістің қайталанатын мәні бар.',
    'email'            => 'Бұл жарамды электрондық пошта мекенжайы болуы керек.',
    'ends_with'        => 'Бұл келесі тармақтардың бірімен аяқталуы керек: :values.',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'Таңдалған мән жарамсыз болып табылады.',
    'file'             => 'Мазмұн файл болуы керек.',
    'filled'           => 'Бұл өріс маңызды болуы керек.',
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
    'image'    => 'Бұл сурет болуы керек.',
    'in'       => 'Таңдалған мән жарамсыз болып табылады.',
    'in_array' => ':other жылы бұл мән болған жоқ.',
    'integer'  => 'Бұл бүтін сан болуы керек.',
    'ip'       => 'Бұл жарамды IP мекенжайы болуы керек.',
    'ipv4'     => 'Бұл жарамды IPv4 мекен-жайы болуы керек.',
    'ipv6'     => 'Бұл жарамды IPv6 мекен-жайы болуы керек.',
    'json'     => 'Бұл жарамды JSON жолы болуы керек.',
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
    'mimes'     => 'Бұл файл түрі болуы керек: :values.',
    'mimetypes' => 'Бұл файл түрі болуы керек: :values.',
    'min'       => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Бұл мән :value-ге көбейтілуі керек',
    'not_in'               => 'Таңдалған мән жарамсыз болып табылады.',
    'not_regex'            => 'Бұл формат қолайсыз.',
    'numeric'              => 'Бұл сан болуы керек.',
    'password'             => 'Пароль дұрыс емес.',
    'present'              => 'Бұл өріс болуы керек.',
    'prohibited'           => 'Бұл өріске тыйым салынады.',
    'prohibited_if'        => 'Егер :other :value болса, бұл өріске тыйым салынады.',
    'prohibited_unless'    => 'Егер :other :values-да болмаса, бұл өріске тыйым салынады.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Бұл формат қолайсыз.',
    'required'             => 'Бұл өріс міндетті болып табылады.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Егер :other :value болса, бұл өріс міндетті болып табылады.',
    'required_unless'      => 'Егер :other жылы :values болмаса, бұл өріс міндетті болып табылады.',
    'required_with'        => 'Бұл өріс :values болған кезде міндетті болып табылады.',
    'required_with_all'    => 'Бұл өріс :values болған кезде міндетті болып табылады.',
    'required_without'     => 'Егер :values жоқ болса, бұл өріс міндетті болып табылады.',
    'required_without_all' => 'Егер :values-ның ешқайсысы болмаса, бұл өріс міндетті болып табылады.',
    'same'                 => 'Бұл өрістің мәні :other мәніне сәйкес келуі керек.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with' => 'Бұл келесі тармақтардың бірінен басталуы керек: :values.',
    'string'      => 'Бұл болуы тиіс, струна.',
    'timezone'    => 'Бұл қолайлы аймақ болуы керек.',
    'unique'      => 'Бұл қазірдің өзінде жасалды.',
    'uploaded'    => 'Ол жүктелмеді.',
    'url'         => 'Бұл формат қолайсыз.',
    'uuid'        => 'Бұл жарамды UUID болуы керек.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
