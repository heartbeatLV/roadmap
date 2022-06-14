<?php

declare(strict_types = 1);

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ColorSettings extends Settings {
    public string $primary;
    public string|null $favicon;

    public static function group() : string {
        return 'colors';
    }
}
