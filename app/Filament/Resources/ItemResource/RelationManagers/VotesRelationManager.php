<?php

declare(strict_types = 1);

namespace App\Filament\Resources\ItemResource\RelationManagers;

use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class VotesRelationManager extends HasManyRelationManager {
    protected static string $relationship = 'votes';
    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form) : Form {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table) : Table {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->label('Date'),
            ])
            ->filters([
                //
            ])
            ->defaultSort('created_at', 'desc');
    }
}
