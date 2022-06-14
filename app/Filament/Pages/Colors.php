<?php

declare(strict_types = 1);

namespace App\Filament\Pages;

use App\Settings\ColorSettings;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\SettingsPage;
use Livewire\TemporaryUploadedFile;

class Colors extends SettingsPage {
    protected static ?string $navigationIcon = 'heroicon-o-color-swatch';
    protected static string $settings = ColorSettings::class;
    protected static ?string $navigationLabel = 'Theme';

    protected function getFormSchema() : array {
        return [
            Card::make([
                ColorPicker::make('primary'),
                FileUpload::make('favicon')
                    ->image()
                    ->helperText('Make sure your storage is linked (by running php artisan storage:link).')
                    ->disk('public')
                    ->imageResizeTargetHeight('64')
                    ->imageResizeTargetWidth('64')
                    ->maxSize(1024)
                    ->getUploadedFileUrlUsing(static fn ($record)                                         => storage_path('app/public/favicon.png'))
                    ->getUploadedFileNameForStorageUsing(static fn (TemporaryUploadedFile $file) : string => (string)'favicon.png'),
            ])->columns(),
        ];
    }
}
