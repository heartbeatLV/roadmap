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
    'accepted'        => 'මෙම :attribute වලංගු විය යුතුය.',
    'accepted_if'     => 'මෙම :attribute, :other :value වන විට පිලිගත හැක.',
    'active_url'      => ':attribute වලංගු නැති URL එකකි.',
    'after'           => 'මෙම :attribute, :date දිනයට පසු දිනයක් විය යුතුය.',
    'after_or_equal'  => 'මෙම :attribute, :date දිනයම හෝ ඊට පසු දිනයක් විය යුතුය.',
    'alpha'           => 'මෙම :attribute ට අඩංගු විය හැක්කේ අකුරු පමණි.',
    'alpha_dash'      => 'මෙම :attribute ට අඩංගු විය හැක්කේ අකුරු, ඉලක්කම්, කෙටිඉර හා යටිඉර පමණි.',
    'alpha_num'       => 'මෙම :attribute ට අඩංගු විය හැක්කේ අකුරු හා ඉලක්කම් පමණි.',
    'array'           => 'මේ :attribute ය array එකක් විය යුතුය.',
    'before'          => 'මෙම :attribute, :date දිනයට පෙර දිනයක් විය යුතුය.',
    'before_or_equal' => 'මෙම :attribute, :date දිනයම හෝ ඊට පෙර දිනයක් විය යුතුය.',
    'between'         => [
        'array'   => 'මෙම අන්තර්ගතය :min ත් :max ත් අතර විය යුතුය.',
        'file'    => 'මෙම ගොනුව කිලෝබයිට් :min ත් :max ත් අතර විය යුතුය.',
        'numeric' => 'මෙම සංක්‍යාව :min ත් :max ත් අතර විය යුතුය.',
        'string'  => 'මෙම වචනය අකුරු :min ත් :max ත් අතර විය යුතුය.',
    ],
    'boolean'          => 'මෙම :attribute ය සත්‍ය හෝ අසත්‍ය අගයක් විය යුතුය.',
    'confirmed'        => 'මෙම :attribute තහවුරු කිරීම නොගැලපේ.',
    'current_password' => 'මුරපදය වලංගු නොවේ.',
    'date'             => 'මෙම :attribute දිනය වලංගු දිනයක් නොවේ.',
    'date_equals'      => 'මෙම :attribute එක :date දිනයට සමාන දිනයක් විය යුතුය.',
    'date_format'      => 'මෙම :attribute එක :format යන ආකාරයට අනුකූල නොවේ.',
    'declined'         => 'The :attribute must be declined.',
    'declined_if'      => 'The :attribute must be declined when :other is :value.',
    'different'        => 'මෙම :attribute එක හා :other එකිනෙකට වෙනස් විය යුතුය.',
    'digits'           => 'මෙම :attribute එක ඉලක්කම් :digits ක් විය යුතුය.',
    'digits_between'   => 'මෙම :attribute එක ඉලක්කම් :min හා :max අතර විය යුතුය.',
    'dimensions'       => 'මෙම :attribute රූපය වැරදි ප්‍රමාණයන්ගෙන් ඇත.',
    'distinct'         => 'මේ :attribute හි එකම අගයේ අනු පිටපත් ඇත.',
    'email'            => 'මෙම :attribute එක වලංගු විද්‍යුත් ලිපිනයක් විය යුතුය.',
    'ends_with'        => 'මෙම :attribute එක :values මගින් අවසාන විය යුතුය.',
    'enum'             => 'The selected :attribute is invalid.',
    'exists'           => 'තෝරාගත් :attribute අගය වලංගු නොවේ.',
    'file'             => 'මෙම :attribute ය ෆයිල් එකක් විය යුතුය.',
    'filled'           => 'මේ :attribute හි අගයක් තිබිය යුතුය.',
    'gt'               => [
        'array'   => 'මෙම :attribute එක :value ට වඩා වැඩි අයිතම ගණනක් විය යුතුය.',
        'file'    => 'මෙම :attribute එක :value ට වඩා වැඩි කිලෝබයිට් ගණනක් විය යුතුය.',
        'numeric' => 'මෙම :attribute එක :value ට වඩා වැඩි අගයක් විය යුතුය.',
        'string'  => 'මෙම :attribute එක :value ට වඩා වැඩි අකුරු ගණනක් විය යුතුය.',
    ],
    'gte' => [
        'array'   => 'මෙම :attribute එක අයිතම :value ට වඩා වැඩි හෝ සමාන විය යුතුයි.',
        'file'    => 'මෙම :attribute එක කිලෝබයිට් :value ට වඩා වැඩි හෝ සමාන විය යුතුයි.',
        'numeric' => 'මෙම :attribute එක :value ට වඩා වැඩි හෝ සමාන විය යුතුයි.',
        'string'  => 'මෙම :attribute එක අකුරු :value ට වඩා වැඩි හෝ සමාන විය යුතුයි.',
    ],
    'image'    => 'මෙම :attribute රූපයක් විය යුතුය.',
    'in'       => 'මෙම තෝරා ඇති :attribute වලංගු නැත.',
    'in_array' => 'මෙම :attribute, :other ක්ෂේත්‍රයේ නොපවතියි.',
    'integer'  => 'මෙම :attribute පූර්ණ සංඛ්යාවක් විය යුතුය.',
    'ip'       => 'මෙම :attribute වලංගු IP ලිපිනයක් විය යුතුය.',
    'ipv4'     => 'මෙම :attribute වලංගු IPv4 ලිපිනය විය යුතුය.',
    'ipv6'     => 'මෙම :attribute වලංගු IPv6 ලිපිනය විය යුතුය.',
    'json'     => 'මෙම :attribute වලංගු JSON පේළියක් විය යුතුය.',
    'lt'       => [
        'array'   => 'මෙම :attribute එක :value ට වඩා අඩු අයිතම ගණනක් විය යුතුය.',
        'file'    => 'මෙම :attribute එක :value ට වඩා අඩු කිලෝබයිට් ගණනක් විය යුතුය.',
        'numeric' => 'මෙම :attribute එක :value ට වඩා අඩු අගයක් විය යුතුය.',
        'string'  => 'මෙම :attribute එක :value ට වඩා අඩු අකුරු ගණනක් විය යුතුය.',
    ],
    'lte' => [
        'array'   => 'මෙම :attribute එක අයිතම :value ට වඩා අඩු හෝ සමාන විය යුතුයි.',
        'file'    => 'මෙම :attribute එක කිලෝබයිට් :value ට වඩා අඩු හෝ සමාන විය යුතුයි.',
        'numeric' => 'මෙම :attribute එක :value ට වඩා අඩු හෝ සමාන විය යුතුයි.',
        'string'  => 'මෙම :attribute එක අකුරු :value ට වඩා අඩු හෝ සමාන විය යුතුයි.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max'         => [
        'array'   => 'මෙම :attribute එක :max ට වඩා වැඩි නොවිය යුතුයි.',
        'file'    => 'මෙම :attribute එක කිලෝබයිට් :max ට වඩා වැඩි නොවිය යුතුයි.',
        'numeric' => 'මෙම :attribute එක අකුරු :max ට වඩා වැඩි නොවිය යුතුයි.',
        'string'  => 'මෙම :attribute එක අයිතම :max ට වඩා වැඩි නොවිය යුතුයි.',
    ],
    'mimes'     => 'මෙම :attribute එක: :values වර්ගයේ ගොනුවක් විය යුතුය.',
    'mimetypes' => 'මෙම :attribute එක: :values වර්ගයේ ගොනුවක් විය යුතුය.',
    'min'       => [
        'array'   => 'මෙම :attribute එක :min ට වඩා අඩු නොවිය යුතුයි.',
        'file'    => 'මෙම :attribute එක කිලෝබයිට් :min ට වඩා අඩු නොවිය යුතුයි.',
        'numeric' => 'මෙම :attribute එක අකුරු :min ට වඩා අඩු නොවිය යුතුයි.',
        'string'  => 'මෙම :attribute එක අයිතම :min ට වඩා අඩු නොවිය යුතුයි.',
    ],
    'multiple_of'          => 'මෙම :attribute ය :value හි ගුණාකාරයක් විය යුතුය.',
    'not_in'               => 'මෙම තෝරා ඇත :attribute වලංගු නැත.',
    'not_regex'            => 'මෙම :attribute ආකෘතිය වලංගු නැත.',
    'numeric'              => 'මෙම :attribute අංකයක් විය යුතුය.',
    'password'             => 'මුරපදය වැරදිය.',
    'present'              => 'මෙම :attribute ක්ෂේත්‍රයේ තිබිය යුතුය.',
    'prohibited'           => 'මෙම :attribute ක්ෂේත්‍රයේ තහනම් කර තිබේ.',
    'prohibited_if'        => ':other, :value වන විට :attribute ක්ෂේත්‍රයේ තහනම් කර තිබේ.',
    'prohibited_unless'    => ':other, :value නොවන්නේ නම් පමණක් :attribute ක්ෂේත්‍රයේ තහනම් කර තිබේ.',
    'prohibits'            => 'මෙම :attribute ක්ෂේත්‍රය :other පැවතීම තහනම් කර ඇත.',
    'regex'                => 'මෙම :attribute ආකෘතිය වලංගු නැත.',
    'required'             => 'මෙම :attribute ක්ෂේත්‍රයේ අවශ්‍යයි.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':other, :value නම් පමණක් මෙම :attribute ක්ෂේත්‍රයේ අවශ්‍යයි.',
    'required_unless'      => ':other, :value නොවන්නේ නම් පමණක් මෙම :attribute ක්ෂේත්‍රයේ අවශ්‍යයි.',
    'required_with'        => ':values අගය පවතීනම් මෙම :attribute ක්ෂේත්‍රයේ අවශ්‍යයි.',
    'required_with_all'    => ':values අගයන් පවතීනම් මෙම :attribute ක්ෂේත්‍රයේ අවශ්‍යයි.',
    'required_without'     => ':values අගය නොපවතීනම් මෙම :attribute ක්ෂේත්‍රයේ අවශ්‍යයි.',
    'required_without_all' => ':values අගයන් නොපවතීනම් මෙම :attribute ක්ෂේත්‍රයේ අවශ්‍යයි.',
    'same'                 => 'මෙම :attribute සහ :other ගැලපිය යුතුයි.',
    'size'                 => [
        'array'   => 'මෙම :attribute යේ අයිතම :size ක් තිබිය යුතුය.',
        'file'    => 'මෙම :attribute ය කිලෝබයිට් :size ක් විය යුතුය.',
        'numeric' => 'මෙම :attribute ය :size. ක් විය යුතුය.',
        'string'  => 'මෙම :attribute ය අකුරු :size විය යුතුය.',
    ],
    'starts_with' => 'මෙම :attribute පහත සඳහන් එකක් සමඟ ආරම්භ කළ යුතුය: :values',
    'string'      => 'මෙම :attribute පේළියකි විය යුතුය.',
    'timezone'    => 'මෙම :attribute වලංගු කලාපයක් විය යුතුය.',
    'unique'      => 'මෙම :attribute දැනටමත් අරගෙන තියෙන්නේ.',
    'uploaded'    => 'මෙම :attribute අප්ලෝඩ් කිරීම අසාර්ථක විය.',
    'url'         => 'මෙම :attribute ආකෘතිය වලංගු නැත.',
    'uuid'        => 'මෙම :attribute වලංගු UUID විය යුතුය.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
