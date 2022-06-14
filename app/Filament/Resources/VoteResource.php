<?php

declare(strict_types = 1);

namespace App\Filament\Resources;

use App\Filament\Resources\VoteResource\Pages;
use App\Models\Vote;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

class VoteResource extends Resource {
    protected static ?string $model = Vote::class;
    protected static ?string $navigationIcon = 'heroicon-o-thumb-up';
    protected static ?string $navigationGroup = 'Manage';

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
                Tables\Columns\TextColumn::make('model.title')->label('Item'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->label('Date'),
            ])
            ->filters([
                //
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getRelations() : array {
        return [
            //
        ];
    }

    public static function getPages() : array {
        return [
            'index'  => Pages\ListVotes::route('/'),
            'create' => Pages\CreateVote::route('/create'),
            'edit'   => Pages\EditVote::route('/{record}/edit'),
        ];
    }

    public static function canEdit(Model $record) : bool {
        return false;
    }

    public static function canCreate() : bool {
        return false;
    }
}
