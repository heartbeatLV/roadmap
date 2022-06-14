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
    'accepted'        => 'វាលនេះត្រូវតែត្រូវបានទទួលយក។',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'វាលនេះមិនមែនជា URL ត្រឹមត្រូវឡើយ។',
    'after'           => 'វាលនេះត្រូវតែមានកាលបរិច្ឆេទបន្ទាប់ពី :date។',
    'after_or_equal'  => 'វាលនេះត្រូវតែជាកាលបរិច្ឆេទ ក្រោយឬស្មើ :date។',
    'alpha'           => 'វាលនេះអាចមានអក្សរតែប៉ុណ្ណោះ។',
    'alpha_dash'      => 'វាលនេះអាចមានតែអក្សរ លេខ និងសហសញ្ញា(-)។',
    'alpha_num'       => 'វាលនេះអាចមានតែអក្សរ និងលេខ។',
    'array'           => 'វាលនេះត្រូវតែជា សំណុំ។',
    'before'          => 'វាលនេះត្រូវតែមានកាលបរិច្ឆេទមុន :date។',
    'before_or_equal' => 'វាលនេះត្រូវតែជាកាលបរិច្ឆេទ មុនឬស្មើ :date។',
    'between'         => [
        'array'   => 'វាលនេះត្រូវតែមានចំនួនរវាង :min និង :max។',
        'file'    => 'វាលនេះត្រូវតែមានរវាង :min និង :max គីឡូបៃ។',
        'numeric' => 'វាលនេះត្រូវតែមានរវាង :min និង :max។',
        'string'  => 'វាលនេះត្រូវតែមានរវាង :min និង :max តួអក្សរ។',
    ],
    'boolean'          => 'វាលនេះត្រូវតែជា ពិត ឬ មិនពិត',
    'confirmed'        => 'វាលនេះការបញ្ជាក់មិនផ្គូរផ្គង។',
    'current_password' => 'The password is incorrect.',
    'date'             => 'វាលនេះគឺមិនមែនជាកាលបរិច្ឆេទត្រឹមត្រូវ។',
    'date_equals'      => 'វាលនេះត្រូវតែជាកាលបរិច្ឆេទស្មើនឹង :date។',
    'date_format'      => 'វាលនេះមិនត្រឹមត្រូវនឹងទម្រង់ :format នេះ។',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'វាលនេះនិង :other ត្រូវតែបញ្ជាក់។',
    'digits'           => 'វាលនេះត្រូវជាខ្ទង់ :digits។',
    'digits_between'   => 'វាលនេះត្រូវចាប់ពីខ្ទង់ :min ទៅ :max។',
    'dimensions'       => 'ទំហំរូបភាព​ វាលនេះមិនត្រឹមត្រូវ។',
    'distinct'         => 'វាលនេះមានតម្លៃស្ទួន។',
    'email'            => 'វាលនេះទម្រង់នេះមិនត្រឹមត្រូវ។',
    'ends_with'        => 'វាលនេះត្រូវបញ្ចប់ដោយពាក្យមួយក្នុងចំណោម :values។',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'ការជ្រើសរើស វាលនេះត្រឹមត្រូវ។',
    'file'             => 'វាលនេះត្រូវតែជាប្រភេទឯកសារ។',
    'filled'           => 'ទម្រង់ វាលនេះនេះគឺទាមទារឲ្យមាន។',
    'gt'               => [
        'array'   => 'វាលនេះត្រូវមានច្រើនជាង :value។',
        'file'    => 'វាលនេះត្រូវតែធំជាង :value គីឡូបៃ។',
        'numeric' => 'វាលនេះត្រូវតែធំជាង :value។',
        'string'  => 'វាលនេះត្រូវតែធំជាង :value តួអក្សរ។',
    ],
    'gte' => [
        'array'   => 'វាលនេះត្រូវមានចំនួន :value ឬច្រើនជាង។',
        'file'    => 'វាលនេះត្រូវតែធំជាងឬស្មើ :value គីឡូបៃ។',
        'numeric' => 'វាលនេះត្រូវតែធំជាងឬស្មើ :value។',
        'string'  => 'វាលនេះត្រូវតែធំជាងឬស្មើ :value តួអក្សរ។',
    ],
    'image'    => 'វាលនេះត្រូវតៃជារូបភាព។',
    'in'       => 'ការជ្រើសរើស វាលនេះមិនត្រឹមត្រូវ។',
    'in_array' => 'វាលនេះត្រូវតែជាមួយក្នុងចំណោម :other។',
    'integer'  => 'វាលនេះត្រូវតែជាចំនួនគត់។',
    'ip'       => 'វាលនេះត្រូវតែជា IP address ត្រឹមត្រូវ។',
    'ipv4'     => 'វាលនេះត្រូវតែជា IPv4 address ត្រឹមត្រូវ។',
    'ipv6'     => 'វាលនេះត្រូវតែជា IPv6 address ត្រឹមត្រូវ។',
    'json'     => 'វាលនេះត្រូវតែជា JSON string ត្រឹមត្រូវ។',
    'lt'       => [
        'array'   => 'វាលនេះត្រូវតែមានចំនួនតិចជាង :value។',
        'file'    => 'វាលនេះត្រូវតែតិចជាង :value គីឡូបៃ។',
        'numeric' => 'វាលនេះត្រូវតែតិចជាង :value។',
        'string'  => 'វាលនេះត្រូវតែតិចជាង :value តួអក្សរ។',
    ],
    'lte' => [
        'array'   => 'វាលនេះត្រូវមានចំនួនតិចជាង :value។',
        'file'    => 'វាលនេះត្រូវតែតិចជាងឬស្មើ :value គីឡូបៃ។',
        'numeric' => 'វាលនេះត្រូវតែតិចជាងឬស្មើ :value។',
        'string'  => 'វាលនេះត្រូវតែតិចជាងឬស្មើ :value តួអក្សរ។',
    ],
    'mac_address' => 'The value must be a valid MAC address.',
    'max'         => [
        'array'   => 'វាលនេះមិនត្រូវច្រើនជាងធាតុនេះ :max។',
        'file'    => 'វាលនេះមិនត្រូវធំជាង :max គីឡូបៃ។',
        'numeric' => 'វាលនេះមិនត្រូវធំជាង :max។',
        'string'  => 'វាលនេះមិនត្រូវធំជាង :max តួអក្សរ។',
    ],
    'mimes'     => 'វាលនេះត្រូវតែជាប្រភេទឯកសារប្រភេទ: :values នេះ។',
    'mimetypes' => 'វាលនេះត្រូវតែជាប្រភេទឯកសារប្រភេទ: :values នេះ។',
    'min'       => [
        'array'   => 'វាលនេះត្រូវតែតិចជាងធាតុនេះ :min។',
        'file'    => 'វាលនេះត្រូវតៃតួចជាង :min គីឡូបៃ។',
        'numeric' => 'វាលនេះត្រូវតែតូចជាង :min។',
        'string'  => 'វាលនេះត្រូវតែតូចជាង :min តួអក្សរ។',
    ],
    'multiple_of'          => 'វាលនេះត្រូវតែជាចំនួនចែកដាច់នឹង :value។',
    'not_in'               => 'ការជ្រើសរើស វាលនេះគឺមិនត្រឹមត្រូវ។',
    'not_regex'            => 'វាលនេះទម្រង់ គឺមិនត្រឹមត្រូវ។',
    'numeric'              => 'វាលនេះត្រូវតែជាលេខ។',
    'password'             => 'ពាក្យសម្ងាត់មិនត្រឺមត្រូវ។',
    'present'              => 'វាលនេះត្រូវតែមាន។',
    'prohibited'           => 'វាលនេះនេះត្រូវហាមឃាត់។',
    'prohibited_if'        => 'វាលនេះនេះត្រូវហាមឃាត់នៅពេលដែល :other គឺ :value។',
    'prohibited_unless'    => 'វាលនេះនេះត្រូវហាមឃាត់លុះត្រា :other គឺនៅក្នុង :values។',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'វាលនេះទម្រង់មិនត្រឹមត្រូវ។',
    'required'             => 'វាលនេះនេះគឺទាមទារឲ្យមាន។',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'វាលនេះនេះគឺទាមទារនៅពេល :other គឺ :value។',
    'required_unless'      => 'វាលនេះនេះគឺទាមទារនៅពេល :other មិនមែន :values។',
    'required_with'        => 'វាលនេះនេះគឺទាមទារនៅពេល :values មាន។',
    'required_with_all'    => 'វាលនេះនេះគឺទាមទារនៅពេល :values មាន។',
    'required_without'     => 'វាលនេះនេះគឺទាមទារនៅពេល :values មិនមាន។',
    'required_without_all' => 'វាលនេះនេះគឺត្រូវបានទាមទារពេល :values មិនមាន។',
    'same'                 => 'វាលនេះនិង :other ត្រូវតែដូចគ្នា។',
    'size'                 => [
        'array'   => 'វាលនេះត្រូវតែមានទំហំ :size។',
        'file'    => 'វាលនេះត្រូវតែ :size គីឡូបៃ។',
        'numeric' => 'វាលនេះត្រូវតែ :size។',
        'string'  => 'វាលនេះត្រូវតែ :size តួអក្សរ។',
    ],
    'starts_with' => 'វាលនេះត្រូវចាប់ផ្តើមដោយ :values ណាមួយ។',
    'string'      => 'វាលនេះត្រូវតែជាប្រភេទតួអក្សរ។',
    'timezone'    => 'វាលនេះត្រូវតែជាតំបន់ដែលត្រឹមត្រូវ។',
    'unique'      => 'វាលនេះត្រូវបានប្រើរួចហើយ។',
    'uploaded'    => 'វាលនេះបរាជ័យក្នុងការបញ្ចូល។',
    'url'         => 'វាលនេះទម្រង់ត្រឹមត្រូវ។',
    'uuid'        => 'វាលនេះត្រូវតែជាទម្រង់ UUID។',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
