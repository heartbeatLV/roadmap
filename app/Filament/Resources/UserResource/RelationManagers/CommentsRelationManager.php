<?php

declare(strict_types = 1);

namespace App\Filament\Resources\UserResource\RelationManagers;

use Closure;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

class CommentsRelationManager extends HasManyRelationManager {
    protected static string $relationship = 'comments';
    protected static ?string $recordTitleAttribute = 'content';

    public function canCreate() : bool {
        return false;
    }

    protected function canEdit(Model $record) : bool {
        return false;
    }

    protected function getTableRecordUrlUsing() : Closure {
        return static fn (Model $record) : string => route('filament.resources.comments.edit', ['record' => $record]);
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
                Tables\Columns\TextColumn::make('content')->searchable(),
                Tables\Columns\TextColumn::make('item.title'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->label('Date'),
            ])
            ->filters([
                //
            ])
            ->defaultSort('created_at', 'desc');
    }
}
