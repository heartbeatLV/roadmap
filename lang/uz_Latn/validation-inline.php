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
    'accepted'        => 'Bu sohani qabul qilish kerak.',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'Bu amal URL emas.',
    'after'           => 'Bu keyin bir sana bo\'lishi kerak :date.',
    'after_or_equal'  => 'Bu :date dan keyingi yoki unga teng sana bo\'lishi kerak.',
    'alpha'           => 'Bu sohada faqat harflar bo\'lishi mumkin.',
    'alpha_dash'      => 'Bu maydon faqat harflarni o\'z ichiga olishi mumkin, raqamlari, tire va underscores.',
    'alpha_num'       => 'Bu sohada faqat harf va raqamlar bo\'lishi mumkin.',
    'array'           => 'Bu maydon bir qator bo\'lishi kerak.',
    'before'          => 'Bu :datedan oldin sana bo\'lishi kerak.',
    'before_or_equal' => 'Bu oldin yoki teng bir sana bo\'lishi kerak :date.',
    'between'         => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'          => 'Bu maydon rost yoki yolg\'on bo\'lishi kerak.',
    'confirmed'        => 'Tasdiqlash mos emas.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'Bu amal sana emas.',
    'date_equals'      => 'Bu :date ga teng sana bo\'lishi kerak.',
    'date_format'      => 'Bu :format formatiga mos kelmaydi.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'Bu qiymat :other dan farq qilishi kerak.',
    'digits'           => 'Bu :digits raqam bo\'lishi kerak.',
    'digits_between'   => 'Bu :min va :max raqamlar orasida bo\'lishi kerak.',
    'dimensions'       => 'Ushbu tasvir noto\'g\'ri o\'lchamlarga ega.',
    'distinct'         => 'Bu maydon dublikat qiymatiga ega.',
    'email'            => 'Bu amal elektron pochta manzili bo\'lishi kerak.',
    'ends_with'        => 'Bu quyidagilardan biri bilan tugashi kerak: :values.',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'Tanlangan qiymat haqiqiy emas.',
    'file'             => 'Kontent fayl bo\'lishi kerak.',
    'filled'           => 'Bu maydon qiymatga ega bo\'lishi kerak.',
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
    'image'    => 'Bu tasvir bo\'lishi kerak.',
    'in'       => 'Tanlangan qiymat haqiqiy emas.',
    'in_array' => 'Bu qiymat mavjud emas :other.',
    'integer'  => 'Bu butun son bo\'lishi kerak.',
    'ip'       => 'Bu amal IP-manzil bo\'lishi kerak.',
    'ipv4'     => 'Bu amal IPv4 manzil bo\'lishi kerak.',
    'ipv6'     => 'Bu amal IPv6 manzil bo\'lishi kerak.',
    'json'     => 'Bu amal JSON string bo\'lishi kerak.',
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
    'mimes'     => 'Bu turdagi fayl bo\'lishi kerak: :values.',
    'mimetypes' => 'Bu turdagi fayl bo\'lishi kerak: :values.',
    'min'       => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Qiymati :value bir necha bo\'lishi kerak',
    'not_in'               => 'Tanlangan qiymat haqiqiy emas.',
    'not_regex'            => 'Bu format asossiz hisoblanadi.',
    'numeric'              => 'Bu raqam bo\'lishi kerak.',
    'password'             => 'Parol noto\'g\'ri.',
    'present'              => 'Bu maydon mavjud bo\'lishi kerak.',
    'prohibited'           => 'Bu maydon taqiqlanadi.',
    'prohibited_if'        => ':other :value bo\'lganda bu maydon taqiqlanadi.',
    'prohibited_unless'    => ':other :values da ekan bu soha taqiqlanadi.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Bu format asossiz hisoblanadi.',
    'required'             => 'Bu maydon talab qilinadi.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Bu maydon :other bo\'lganda :value talab qilinadi.',
    'required_unless'      => 'Bu maydon bo\'lmasa talab qilinadi :other yilda :values.',
    'required_with'        => 'Bu maydon :values mavjud bo\'lganda talab qilinadi.',
    'required_with_all'    => 'Bu maydon :values mavjud bo\'lganda talab qilinadi.',
    'required_without'     => 'Ushbu maydon :values mavjud bo\'lmaganda talab qilinadi.',
    'required_without_all' => 'Bu maydon hech qachon talab qilinadi :values mavjud.',
    'same'                 => 'Ushbu maydonning qiymati :other dan biriga mos kelishi kerak.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with' => 'Bu quyidagilardan biri bilan boshlash kerak: :values.',
    'string'      => 'Bu mag\'lubiyatga bo\'lishi kerak.',
    'timezone'    => 'Bu amal zonasi bo\'lishi kerak.',
    'unique'      => 'Bu allaqachon olingan.',
    'uploaded'    => 'Bu upload olmadi.',
    'url'         => 'Bu format asossiz hisoblanadi.',
    'uuid'        => 'Bu amal UUID bo\'lishi kerak.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
