<?php

declare(strict_types = 1);

namespace App\Filament\Resources\ItemResource\RelationManagers;

use Filament\Resources\Form;
use Filament\Resources\RelationManagers\MorphManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

class ActivitiesRelationManager extends MorphManyRelationManager {
    protected static string $relationship = 'activities';
    protected static ?string $recordTitleAttribute = 'description';

    protected function canEdit(Model $record) : bool {
        return false;
    }

    protected function canDelete(Model $record) : bool {
        return false;
    }

    public static function form(Form $form) : Form {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table) : Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('causer.name'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->label('Date'),
            ])
            ->filters([
                //
            ])
            ->defaultSort('created_at', 'desc');
    }
}
