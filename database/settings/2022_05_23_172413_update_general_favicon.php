<?php

declare(strict_types = 1);

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class UpdateGeneralFavicon extends SettingsMigration {
    public function up() : void {
        $this->migrator->add('colors.favicon', null);
    }
}
