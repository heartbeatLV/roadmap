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
    'accepted'        => 'שדה זה חייב להתקבל.',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'כתובת זו אינה תקפה.',
    'after'           => 'זה חייב להיות תאריך אחרי :date.',
    'after_or_equal'  => 'זה חייב להיות תאריך אחרי או שווה ל-:date.',
    'alpha'           => 'שדה זה עשוי להכיל רק אותיות.',
    'alpha_dash'      => 'שדה זה עשוי להכיל רק אותיות, מספרים, מקפים וקווים תחתיים.',
    'alpha_num'       => 'שדה זה עשוי להכיל רק אותיות ומספרים.',
    'array'           => 'שדה זה חייב להיות מערך.',
    'before'          => 'זה חייב להיות תאריך לפני :date.',
    'before_or_equal' => 'זה חייב להיות תאריך לפני או שווה ל-:date.',
    'between'         => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'          => 'שדה זה חייב להיות אמת או שקר.',
    'confirmed'        => 'האישור אינו תואם.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'זה לא תאריך תקף.',
    'date_equals'      => 'זה חייב להיות תאריך שווה ל-:date.',
    'date_format'      => 'זה לא מתאים לפורמט :format.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'ערך זה חייב להיות שונה מ-:other.',
    'digits'           => 'זה חייב להיות :digits ספרות.',
    'digits_between'   => 'זה חייב להיות בין :min ו :max ספרות.',
    'dimensions'       => 'לתמונה הזו יש ממדים לא תקפים.',
    'distinct'         => 'לשדה הזה יש ערך כפול.',
    'email'            => 'זו חייבת להיות כתובת דוא \" ל תקפה.',
    'ends_with'        => 'זה חייב להסתיים עם אחד הדברים הבאים: :values.',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'הערך הנבחר אינו תקף.',
    'file'             => 'התוכן חייב להיות קובץ.',
    'filled'           => 'לשדה הזה חייב להיות ערך.',
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
    'image'    => 'זו חייבת להיות תמונה.',
    'in'       => 'הערך הנבחר אינו תקף.',
    'in_array' => 'ערך זה אינו קיים בשנת :other.',
    'integer'  => 'זה חייב להיות מספר שלם.',
    'ip'       => 'זה חייב להיות כתובת IP תקפה.',
    'ipv4'     => 'זו חייבת להיות כתובת ipv4 תקפה.',
    'ipv6'     => 'זו חייבת להיות כתובת ipv6 תקפה.',
    'json'     => 'זה חייב להיות מחרוזת json תקפה.',
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
    'mimes'     => 'זה חייב להיות קובץ מסוג: :values.',
    'mimetypes' => 'זה חייב להיות קובץ מסוג: :values.',
    'min'       => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'הערך חייב להיות מרובה של :value',
    'not_in'               => 'הערך הנבחר אינו תקף.',
    'not_regex'            => 'תבנית זו אינה תקפה.',
    'numeric'              => 'זה חייב להיות מספר.',
    'password'             => 'הסיסמה שגויה.',
    'present'              => 'השדה הזה חייב להיות נוכח.',
    'prohibited'           => 'שדה זה אסור.',
    'prohibited_if'        => 'שדה זה אסור כאשר :other הוא :value.',
    'prohibited_unless'    => 'שדה זה אסור אלא אם כן :other הוא בשנת :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'תבנית זו אינה תקפה.',
    'required'             => 'שדה זה נדרש.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'שדה זה נדרש כאשר :other הוא :value.',
    'required_unless'      => 'שדה זה נדרש אלא אם כן :other הוא :values.',
    'required_with'        => 'שדה זה נדרש כאשר :values קיים.',
    'required_with_all'    => 'שדה זה נדרש כאשר :values נמצאים.',
    'required_without'     => 'שדה זה נדרש כאשר :values אינו קיים.',
    'required_without_all' => 'שדה זה נדרש כאשר אף אחד :values נמצאים.',
    'same'                 => 'הערך של שדה זה חייב להתאים לזה מ-:other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with' => 'זה חייב להתחיל עם אחד הדברים הבאים: :values.',
    'string'      => 'זה חייב להיות חוט.',
    'timezone'    => 'זה חייב להיות אזור חוקי.',
    'unique'      => 'זה כבר צולם.',
    'uploaded'    => 'אין אפשרות להעלות את הקובץ.',
    'url'         => 'תבנית זו אינה תקפה.',
    'uuid'        => 'זה חייב להיות UUID תקף.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
