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
    'accepted'        => 'ช่องข้อมูลนี้จะต้องรับการยอมรับ',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'นี่ไม่ใช่การใช้ได้ที่อยู่ URL ได้',
    'after'           => 'นี่ต้องเป็นวันหลังจาก :date.',
    'after_or_equal'  => 'นี่ต้องเป็นวันหลังจากหรือเท่ากับ :date.',
    'alpha'           => 'ช่องข้อมูลนี้อาจจะเป็นเพียงแค่จะบรรจุจดหมาย',
    'alpha_dash'      => 'ช่องข้อมูลนี้อาจจะเป็นเพียงแค่จะบรรจุจดหมายของตัวเลข dashes และ underscores.',
    'alpha_num'       => 'ช่องข้อมูลนี้อาจจะเป็นเพียงแค่จะบรรจุจดหมายและเบอร์โทรศัพท์',
    'array'           => 'ช่องข้อมูลนี้จะต้องเป็นอาเรย์.',
    'before'          => 'นี่ต้องเป็นวันก่อนที่ :date.',
    'before_or_equal' => 'นี่ต้องเป็นวันก่อนหรือเท่ากับ :date.',
    'between'         => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'          => 'ช่องข้อมูลนี้ต้องเป็นเรื่องจริงหรือเท็จ',
    'confirmed'        => 'ครับการยืนยันไม่ตรงกัน',
    'current_password' => 'The password is incorrect.',
    'date'             => 'นี่เป็นค่าวันที่ที่ไม่ถูกต้อง!',
    'date_equals'      => 'นี่ต้องเป็นวันเท่ากับ :date.',
    'date_format'      => 'นี่มันไม่ตรงกับรูปแบบ :format.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'ค่านี้จะต้องแตกต่างจาก :other.',
    'digits'           => 'นี่ต้องเป็น :digits อกเลขรหัสมา',
    'digits_between'   => 'นี่ต้องเป็นระหว่าง :min และ :max อกเลขรหัสมา',
    'dimensions'       => 'ภาพนี้มีไม่ถูกต้องมิติ',
    'distinct'         => 'ช่องข้อมูลนี้มีองปลค่า',
    'email'            => 'นี่ต้องเป็นที่อยู่อีเมลที่ถูกต้อง',
    'ends_with'        => 'นี่คงจบอย่างหนึ่งจากเกิดข้อผิดพลาดต่อไปนี้::values.',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'คอนที่เลือกไว้ออกค่าใช้ไม่ได้หรือไม่ถูกต้อง',
    'file'             => 'เนื้อหาต้องแฟ้ม',
    'filled'           => 'ช่องข้อมูลนี้คงมีมูลค่าอยู่',
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
    'image'    => 'นี่ต้องเป็นภาพได้ที่นี่',
    'in'       => 'คอนที่เลือกไว้ออกค่าใช้ไม่ได้หรือไม่ถูกต้อง',
    'in_array' => 'ค่านี้ยังไม่มีอยู่ใน :other.',
    'integer'  => 'นี่ต้องเป็นการเป็นเลขจำนวนเต็ม',
    'ip'       => 'นี่ต้องเป็นที่ใช้งานได้โดยใช้ไอพีแอดเดรส.',
    'ipv4'     => 'นี่ต้องเป็นที่ถูกต้อ IPv4 อยู่แล้ว',
    'ipv6'     => 'นี่ต้องเป็นที่ถูกต้อ IPv6 อยู่แล้ว',
    'json'     => 'นี่ต้องเป็นที่ถูกต้อ LANGUAGE องข้อความ',
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
    'mimes'     => 'นี่ต้องเป็นแฟ้มประเภท::values.',
    'mimetypes' => 'นี่ต้องเป็นแฟ้มประเภท::values.',
    'min'       => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'ค่าจะต้องเป็นหลายของ :value',
    'not_in'               => 'คอนที่เลือกไว้ออกค่าใช้ไม่ได้หรือไม่ถูกต้อง',
    'not_regex'            => 'นี่รูปแบบไม่ถูกต้อง',
    'numeric'              => 'นี่ต้องเป็นตัวเลข',
    'password'             => 'รหัสผ่านไม่ถูกต้อง',
    'present'              => 'ช่องข้อมูลนี้ต้องเป็นของขวัญ',
    'prohibited'           => 'ช่องข้อมูลนี้เป็น prohibited.',
    'prohibited_if'        => 'ช่องข้อมูลนี้เป็น prohibited ตอนที่ :other คือ :value.',
    'prohibited_unless'    => 'ช่องข้อมูลนี้เป็น prohibited นอกจาก :other อยู่ใน :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'นี่รูปแบบไม่ถูกต้อง',
    'required'             => 'ช่องข้อมูลนี้เป็นต้องการ.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'ช่องข้อมูลนี้เป็นต้องการตอนที่ :other คือ :value.',
    'required_unless'      => 'ช่องข้อมูลนี้เป็นต้องการนอกจาก :other อยู่ใน :values.',
    'required_with'        => 'ช่องข้อมูลนี้เป็นต้องการตอนที่ :values เป็นของขวัญ',
    'required_with_all'    => 'ช่องข้อมูลนี้เป็นต้องการตอนที่ :values เป็นของขวัญ',
    'required_without'     => 'ช่องข้อมูลนี้เป็นต้องการตอนที่ :values ไม่ใช่ของขวัญ',
    'required_without_all' => 'ช่องข้อมูลนี้เป็นต้องการตอนที่ไม่ใช่เรื่องของ :values เป็นของขวัญ',
    'same'                 => 'ค่าของช่องข้อมูลนี้จะต้องตรงกับหนึ่งจาก :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with' => 'นี่ต้องเริ่มต้นกับหนึ่งจากเกิดข้อผิดพลาดต่อไปนี้::values.',
    'string'      => 'นี่คงเป็นข้อความ',
    'timezone'    => 'นี่ต้องเป็นที่ใช้งานพื้นที่อันตราย',
    'unique'      => 'มันจะถูกจับตัวไป',
    'uploaded'    => 'นี่ล้มเหลวในการอัปโหลด',
    'url'         => 'นี่รูปแบบไม่ถูกต้อง',
    'uuid'        => 'นี่ต้องเป็นที่ถูกต้อ PHLUIDNAME.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
