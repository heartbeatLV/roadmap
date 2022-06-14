<?php

declare(strict_types = 1);

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class UpdateGeneral extends SettingsMigration {
    public function up() : void {
        $this->migrator->addEncrypted('general.password', '');
    }
}
