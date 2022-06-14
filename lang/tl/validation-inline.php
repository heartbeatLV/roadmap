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
    'accepted'        => 'Dapat na tinanggap ang patlang na ito.',
    'accepted_if'     => 'This field must be accepted when :other is :value.',
    'active_url'      => 'Ito ay hindi isang wastong URL.',
    'after'           => 'Ito ay dapat na isang petsa pagkatapos ng :date.',
    'after_or_equal'  => 'Ito ay dapat na isang petsa pagkatapos o katumbas ng :date.',
    'alpha'           => 'Ang patlang na ito ay maaari lamang maglaman ng mga titik.',
    'alpha_dash'      => 'Ang patlang na ito ay maaari lamang maglaman ng mga titik, numero, gitling at mga salungguhit.',
    'alpha_num'       => 'Ang patlang na ito ay maaari lamang maglaman ng mga titik at numero.',
    'array'           => 'Ang patlang na ito ay dapat na isang array.',
    'before'          => 'Ito ay dapat na isang petsa bago :date.',
    'before_or_equal' => 'Ito ay dapat na isang petsa bago o katumbas ng :date.',
    'between'         => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'          => 'Ang patlang na ito ay dapat na totoo o hindi.',
    'confirmed'        => 'Kumpirmasyon ay hindi tumutugma.',
    'current_password' => 'The password is incorrect.',
    'date'             => 'Ito ay hindi isang wastong petsa.',
    'date_equals'      => 'Ito ay dapat na isang petsa na katumbas ng :date.',
    'date_format'      => 'Ito ay hindi tumutugma sa pormat :format.',
    'declined'         => 'This value must be declined.',
    'declined_if'      => 'This value must be declined when :other is :value.',
    'different'        => 'Ang halagang ito ay dapat na naiiba mula sa :other.',
    'digits'           => 'Ito ay dapat na :digits digit.',
    'digits_between'   => 'Ito ay dapat na sa pagitan ng :min at :max na numero.',
    'dimensions'       => 'Ang larawan na ito ay may hindi wastong sukat.',
    'distinct'         => 'Ang patlang na ito ay may dobleng halaga.',
    'email'            => 'Ito ay dapat na isang wastong email address.',
    'ends_with'        => 'Ito ay dapat magtapos sa isa sa mga sumusunod: :values.',
    'enum'             => 'The selected value is invalid.',
    'exists'           => 'Ang napiling halaga ay hindi wasto.',
    'file'             => 'Ang nilalaman ay dapat na isang talaksan.',
    'filled'           => 'Ang patlang na ito ay dapat magkaroon ng isang halaga.',
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
    'image'    => 'Ito ay dapat na isang imahe.',
    'in'       => 'Ang napiling halaga ay hindi wasto.',
    'in_array' => 'Ang halagang ito ay hindi umiiral sa :other.',
    'integer'  => 'Ito ay dapat na isang integer.',
    'ip'       => 'Ito ay dapat na isang wastong IP address.',
    'ipv4'     => 'Ito ay dapat na isang wastong address ng Ipb4.',
    'ipv6'     => 'Ito ay dapat na isang wastong Ipbagong address.',
    'json'     => 'Ito ay dapat na isang wastong HSON string.',
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
    'mimes'     => 'Ito ay dapat na isang talaksan ng uri: :values.',
    'mimetypes' => 'Ito ay dapat na isang talaksan ng uri: :values.',
    'min'       => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Ang halaga ay dapat na isang maramihang ng :value',
    'not_in'               => 'Ang napiling halaga ay hindi wasto.',
    'not_regex'            => 'Hindi balido ang pormat na ito.',
    'numeric'              => 'Ito ay dapat na isang numero.',
    'password'             => 'Ang password ay hindi tama.',
    'present'              => 'Ang patlang na ito ay dapat na kasalukuyan.',
    'prohibited'           => 'Ang patlang na ito ay ipinagbabawal.',
    'prohibited_if'        => 'Ang patlang na ito ay ipinagbabawal kapag :other ay :value.',
    'prohibited_unless'    => 'Ang patlang na ito ay ipinagbabawal maliban kung :other ay sa :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Hindi balido ang pormat na ito.',
    'required'             => 'Ang patlang na ito ay kinakailangan.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Ang patlang na ito ay kinakailangan kapag :other ay :value.',
    'required_unless'      => 'Ang patlang na ito ay kinakailangan maliban kung :other ay nasa :values.',
    'required_with'        => 'Ang patlang na ito ay kinakailangan kapag :values ay naroroon.',
    'required_with_all'    => 'Ang patlang na ito ay kinakailangan kapag :values ay naroroon.',
    'required_without'     => 'Ang patlang na ito ay kinakailangan kapag :values ay hindi kasalukuyan.',
    'required_without_all' => 'Ang patlang na ito ay kinakailangan kapag wala sa :values ay kasalukuyan.',
    'same'                 => 'Ang halaga ng patlang na ito ay dapat na tumugma sa isa mula sa :other.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with' => 'Ito ay dapat magsimula sa isa sa mga sumusunod: :values.',
    'string'      => 'Ito ay dapat na isang string.',
    'timezone'    => 'Ito ay dapat isang wastong Sona.',
    'unique'      => 'Ito ay nai-kinuha.',
    'uploaded'    => 'Ito ay nabigo upang i-upload.',
    'url'         => 'Hindi balido ang pormat na ito.',
    'uuid'        => 'Ito ay dapat na isang wastong UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
