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
    'accepted'        => 'Ruangan ini mesti diterima pakai.',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'URL ini adalah tidak sah.',
    'after'           => 'Tarikh mesti tarikh selepas :date.',
    'after_or_equal'  => 'Tarikh mesti tarikh selepas atau bersamaan :date.',
    'alpha'           => 'Ruangan ini hanya boleh mengandungi huruf.',
    'alpha_dash'      => 'Ruangan ini boleh mengandungi huruf, nombor, dan sengkang.',
    'alpha_num'       => 'Ruangan ini boleh mengandungi huruf dan nombor.',
    'array'           => 'Ruangan ini mesti jujukan.',
    'before'          => 'Ruangan ini mesti tarikh sebelum :date.',
    'before_or_equal' => 'Ruangan ini mesti tarikh sebelum atau bersamaan :date.',
    'between'         => [
        'array'   => 'Ruangan ini mesti mengandungi antara :min dan :max perkara.',
        'file'    => 'Ruangan ini mesti mengandungi antara :min dan :max kilobait.',
        'numeric' => 'Ruangan ini mesti mengandungi antara :min dan :max.',
        'string'  => 'Ruangan ini mesti mengandungi antara :min dan :max aksara.',
    ],
    'boolean'          => 'Ruangan ini mesti benar atau salah.',
    'confirmed'        => 'Pengesahan yang tidak sepadan.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'Tarikh ini tidak sah.',
    'date_equals'      => 'Tarikh mesti sama dengan :date.',
    'date_format'      => 'Format tarikh tidak sepadan dengan :format.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'Nilai ini dan :other mesti berlainan.',
    'digits'           => 'Ruangan ini mesti :digits.',
    'digits_between'   => 'Ruangan ini mesti mengandungi nilai antara :min dan :max digits.',
    'dimensions'       => 'Dimensi imej tidak sah.',
    'distinct'         => 'Ruangan ini mempunyai nilai yang berulang.',
    'email'            => 'Alamat emel mestilah sah.',
    'ends_with'        => 'Nilai mesti berakhir dengan salah satu dari nilai berikut: :values.',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'Pilihan tidak sah.',
    'file'             => 'Ruangan ini mesti fail yang sah.',
    'filled'           => 'Ruangan ini mesti mempunyai nilai.',
    'gt'               => [
        'array'   => 'Jujukan mesti mengandungi lebih daripada :value perkara.',
        'file'    => 'Saiz fail mesti melebihi :value kilobait.',
        'numeric' => 'Nilai mesti melebihi :value.',
        'string'  => 'Rentetan mesti melebihi :value aksara.',
    ],
    'gte' => [
        'array'   => 'Jujukan mesti mengandungi :value perkara atau lebih.',
        'file'    => 'Saiz fail mesti melebihi atau bersamaan :value kilobait.',
        'numeric' => 'Nilai mesti melebihi atau bersamaan :value.',
        'string'  => 'Rentetan mesti melebihi atau bersamaan :value aksara.',
    ],
    'image'    => 'Nilai mesti imej.',
    'in'       => 'Pilihan tidak sah.',
    'in_array' => 'Nilai tidak wujud di :other.',
    'integer'  => 'Nilai mesti integer.',
    'ip'       => 'Alamat IP tidak sah.',
    'ipv4'     => 'Nilai mesti alamat IPv4 yang sah.',
    'ipv6'     => 'Nilai mesti alamat IPv6 yang sah.',
    'json'     => 'Nilai mesti rentetan JSON yang sah.',
    'lt'       => [
        'array'   => 'Jujukan mesti mengandungi kurang daripada :value perkara.',
        'file'    => 'Saiz fail mesti kurang daripada :value kilobait.',
        'numeric' => 'Nilai mesti kurang daripada :value.',
        'string'  => 'Rentetan mesti kurang daripada :value aksara.',
    ],
    'lte' => [
        'array'   => 'Jujukan mesti mengandungi kurang daripada atau bersamaan dengan :value perkara.',
        'file'    => 'Saiz fail mesti kurang daripada atau bersamaan dengan :value kilobait.',
        'numeric' => 'Nilai mesti kurang daripada atau bersamaan dengan :value.',
        'string'  => 'Rentetan mesti kurang daripada atau bersamaan dengan :value aksara.',
    ],
    'mac_address' => 'The value must be a valid MAC address.',
    'max'         => [
        'array'   => 'Jujukan mesti tidak melebihi :max perkara.',
        'file'    => 'Saiz fail mesti tidak melebihi :max kilobait.',
        'numeric' => 'Nilai mesti tidak melebihi :max.',
        'string'  => 'Rentetan mesti tidak melebihi :max aksara.',
    ],
    'mimes'     => 'Fail ini mesti berjenis: :values.',
    'mimetypes' => 'Fail ini mesti berjenis: :values.',
    'min'       => [
        'array'   => 'Jujukan mesti sekurang-kurangnya :min perkara.',
        'file'    => 'Saiz fail mesti sekurang-kurangnya :min kilobait.',
        'numeric' => 'Nilai mesti sekurang-kurangnya :min.',
        'string'  => 'Rentetan mesti sekurang-kurangnya :min aksara.',
    ],
    'multiple_of'          => 'Nilai mesti gandaan :value',
    'not_in'               => 'Pilihan tidak sah.',
    'not_regex'            => 'Format tidak sah.',
    'numeric'              => 'Nilai mesti nombor.',
    'password'             => 'Kata laluan tidak sah.',
    'present'              => 'Ruangan ini mesti wujud.',
    'prohibited'           => 'Ruangan ini adalah dilarang.',
    'prohibited_if'        => 'Ruangan ini adalah dilarang apabila :other adalah :value.',
    'prohibited_unless'    => 'Ruangan ini adalah dilarang kecuali :other adalah di :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Format tidak sah.',
    'required'             => 'Ruangan ini diperlukan.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Ruangan ini diperlukan bila :other sama dengan :value.',
    'required_unless'      => 'Ruangan ini diperlukan sekiranya :other ada dalam :values.',
    'required_with'        => 'Ruangan ini diperlukan bila :values wujud.',
    'required_with_all'    => 'Ruangan ini diperlukan bila :values wujud.',
    'required_without'     => 'Ruangan ini diperlukan bila :values tidak wujud.',
    'required_without_all' => 'Ruangan ini diperlukan bila kesemua :values wujud.',
    'same'                 => 'Nilai ruangan ini mesti salah satu nilai di :other.',
    'size'                 => [
        'array'   => 'Saiz jujukan mesti mengandungi :size perkara.',
        'file'    => 'Saiz fail mesti :size kilobait.',
        'numeric' => 'Saiz nilai mesti :size.',
        'string'  => 'Saiz rentetan mesti :size aksara.',
    ],
    'starts_with' => 'Nilai mesti bermula dengan salah satu dari: :values.',
    'string'      => 'Nilai mesti jujukan.',
    'timezone'    => 'Nilai mesti zon masa yang sah.',
    'unique'      => 'Nilai telah wujud.',
    'uploaded'    => 'Muat naik gagal.',
    'url'         => 'Format ini tidak sah.',
    'uuid'        => 'UUID tidak sah.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
